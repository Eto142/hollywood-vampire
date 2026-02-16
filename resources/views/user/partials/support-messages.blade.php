@foreach($messages as $msg)
    <div class="mb-2 flex {{ $msg->is_admin ? 'justify-end' : 'justify-start' }}">
        <div class="rounded-lg px-4 py-2 {{ $msg->is_admin ? 'bg-[#231813] text-white' : 'bg-gray-200 text-black' }} max-w-[70%]">
            <div class="text-xs text-gray-500 mb-1">{{ $msg->is_admin ? 'Admin' : 'You' }} • {{ $msg->created_at->format('M d, H:i') }}</div>
            <div>{{ $msg->message }}</div>
        </div>
    </div>
@endforeach
