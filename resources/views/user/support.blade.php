@include('user.header')
    <div class="lg:pl-[5rem] lg:p-4 lg:ml-64">
      <div class="container">

      </div>
      <div class="container px-4 py-[3rem]">
        <div class="mb-10">
          <div class="flex items-center space-x-1">
            <h2 class="text-2xl font-semibold font-inter text-[#231813]">
              Admin Support

            </h2>
            <svg width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M6.84775 16.8125L5.34359 14.2396L2.35505 13.626L2.6915 10.7167L0.791504 8.5L2.6915 6.30312L2.35505 3.39375L5.34359 2.78021L6.84775 0.1875L9.49984 1.41458L12.1519 0.1875L13.6759 2.78021L16.6446 3.39375L16.3082 6.30312L18.2082 8.5L16.3082 10.7167L16.6446 13.626L13.6759 14.2396L12.1519 16.8125L9.49984 15.5854L6.84775 16.8125ZM7.38213 15.249L9.49984 14.3583L11.6769 15.249L13.003 13.2698L15.3186 12.676L15.0811 10.3208L16.6842 8.5L15.0811 6.63958L15.3186 4.28437L13.003 3.73021L11.6373 1.75104L9.49984 2.64167L7.32275 1.75104L5.99671 3.73021L3.68109 4.28437L3.91859 6.63958L2.31546 8.5L3.91859 10.3208L3.68109 12.7156L5.99671 13.2698L7.38213 15.249ZM8.6488 11.1323L13.1415 6.67917L12.2509 5.86771L8.6488 9.43021L6.76859 7.47083L5.85817 8.36146L8.6488 11.1323Z" fill="#231813" />
            </svg>
          </div>
          <p class="text-xs text-zinc-500">
            Typically replies within few hours
          </p>
        </div>
        <div class="pt-6 ">
          <div class="max-w-4xl  py-8  px-4 lg:px-8  rounded-xl">
            <!-- Chat Header -->


            <div id="chat-box" class=" h-[23rem] lg:h-[19rem] overflow-y-scroll">

            </div>

            <!-- Chat Input -->
            <div class="mt-10 lg:pl-10 mx-auto">
              <textarea id="message-input" class="rounded-md border p-2 w-full h-[8rem]" placeholder="Type your message here"></textarea>
              <div class="flex">
                <button onclick="sendMessage()" class=" mx-auto lg:mx-0.5 lg:ml-auto px-6 py-2 w-full lg:w-auto bg-[#231813] text-white rounded-md text-sm">Send</button>
              </div>
            </div>
          </div>

          <script>
            function updateChat() {
              const chatBox = document.getElementById('chat-box');
              const xhr = new XMLHttpRequest();
              xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                  if (xhr.status === 200) {
                    const previousChatContent = chatBox.innerHTML;
                    chatBox.innerHTML = xhr.responseText;

                    // Clear the session variable to allow notifications for subsequent messages
                    clearFirstMessageFlag();

                    chatBox.scrollTop = chatBox.scrollHeight;
                  } else {
                    console.error('Error fetching chat messages');
                  }
                }
              };
              xhr.open('GET', '{{ route('support.fetch') }}', true);
              xhr.send();
            }

            /* function clearFirstMessageFlag() {
               // Use AJAX to clear the session variable indicating the first message
               const xhr = new XMLHttpRequest();
               xhr.open('GET', 'clear_first_message_flag.php', true);
               xhr.send();
             } */

            function sendMessage() {
              const messageInput = document.getElementById('message-input');
              const message = messageInput.value;

              if (message.trim() !== '') {
                // Use AJAX to send the message to the server
                const xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                  if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                      // Update the chat after sending the message
                      updateChat();
                    } else {
                      console.error('Error sending message');
                    }
                  }
                };
                xhr.open('POST', '{{ route('support.send') }}', true);
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
                xhr.send('message=' + encodeURIComponent(message));

                // Clear the message input
                messageInput.value = '';
              }
            }

            // Load initial chat messages on page load
            updateChat();

            // Update chat every 5 seconds (you can adjust this interval)
            setInterval(updateChat, 5000);
          </script>

        </div>
      </div>
    </div>

    <div id="overlay" class="fixed inset-0 bg-black opacity-50 z-30 hidden lg:hidden"></div>
  </main>

  <script src="dist/flowbite.js"></script>

  <script src="assets/core.js"></script>
</body>

</html>