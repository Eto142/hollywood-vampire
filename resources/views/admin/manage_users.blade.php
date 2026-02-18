@include('admin.header')
@include('admin.navbar')

<!-- Page Header -->
<div class="page-header">
    <div>
        <nav class="breadcrumb">
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            <span class="separator">/</span>
            <span class="current">Manage Users</span>
        </nav>
        <h1 class="page-title">Manage Users</h1>
        <p class="page-subtitle">View and manage all registered users</p>
    </div>
    <div class="page-header-actions">
        <a href="{{ route('admin.dashboard') }}" class="btn-admin btn-admin-secondary">
            <i class="bi bi-arrow-left"></i>
            Back to Dashboard
        </a>
        <button type="button" class="btn-admin btn-admin-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">
            <i class="bi bi-person-plus"></i> New User
        </button>

        @if(session('generated_password') && session('generated_usertag'))
        <div class="alert alert-success mt-3">
            <strong>User Created!</strong><br>
            <span>Password: <code>{{ session('generated_password') }}</code></span><br>
            <span>UserTag: <code>{{ session('generated_usertag') }}</code></span>
        </div>
        @endif
    <!-- Add User Modal -->
    <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addUserModalLabel">Add New User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="{{ route('admin.add.user') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <!-- Password input removed: password is now auto-generated and shown after user creation -->
                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                        </div>
                        <div class="mb-3">
                            <label for="country" class="form-label">Country</label>
                            <select class="form-select" id="country" name="country" required>
                                <option value="">Select Country</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="GB">United Kingdom</option>
                                <option value="AU">Australia</option>
                                <option value="NG">Nigeria</option>
                                <option value="IN">India</option>
                                <option value="DE">Germany</option>
                                <option value="FR">France</option>
                                <option value="IT">Italy</option>
                                <option value="ES">Spain</option>
                                <option value="BR">Brazil</option>
                                <option value="ZA">South Africa</option>
                                <option value="JP">Japan</option>
                                <option value="CN">China</option>
                                <option value="RU">Russia</option>
                                <option value="MX">Mexico</option>
                                <option value="AR">Argentina</option>
                                <option value="EG">Egypt</option>
                                <option value="TR">Turkey</option>
                                <option value="KR">South Korea</option>
                                <option value="PK">Pakistan</option>
                                <option value="ID">Indonesia</option>
                                <option value="SA">Saudi Arabia</option>
                                <option value="UA">Ukraine</option>
                                <option value="PL">Poland</option>
                                <option value="NL">Netherlands</option>
                                <option value="SE">Sweden</option>
                                <option value="CH">Switzerland</option>
                                <option value="BE">Belgium</option>
                                <option value="SG">Singapore</option>
                                <option value="MY">Malaysia</option>
                                <option value="PH">Philippines</option>
                                <option value="TH">Thailand</option>
                                <option value="KE">Kenya</option>
                                <option value="GH">Ghana</option>
                                <option value="CO">Colombia</option>
                                <option value="CL">Chile</option>
                                <option value="NZ">New Zealand</option>
                                <option value="IE">Ireland</option>
                                <option value="DK">Denmark</option>
                                <option value="NO">Norway</option>
                                <option value="FI">Finland</option>
                                <option value="AT">Austria</option>
                                <option value="GR">Greece</option>
                                <option value="PT">Portugal</option>
                                <option value="HU">Hungary</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="RO">Romania</option>
                                <option value="IL">Israel</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="QA">Qatar</option>
                                <option value="VN">Vietnam</option>
                                <option value="BD">Bangladesh</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="TZ">Tanzania</option>
                                <option value="UG">Uganda</option>
                                <option value="ZW">Zimbabwe</option>
                                <option value="SD">Sudan</option>
                                <option value="MA">Morocco</option>
                                <option value="DZ">Algeria</option>
                                <option value="TN">Tunisia</option>
                                <option value="ET">Ethiopia</option>
                                <option value="CM">Cameroon</option>
                                <option value="SN">Senegal</option>
                                <option value="CI">Ivory Coast</option>
                                <option value="AO">Angola</option>
                                <option value="PE">Peru</option>
                                <option value="VE">Venezuela</option>
                                <option value="EC">Ecuador</option>
                                <option value="BO">Bolivia</option>
                                <option value="UY">Uruguay</option>
                                <option value="CR">Costa Rica</option>
                                <option value="PA">Panama</option>
                                <option value="CU">Cuba</option>
                                <option value="JM">Jamaica</option>
                                <option value="DO">Dominican Republic</option>
                                <option value="SV">El Salvador</option>
                                <option value="GT">Guatemala</option>
                                <option value="HN">Honduras</option>
                                <option value="NI">Nicaragua</option>
                                <option value="PY">Paraguay</option>
                                <option value="SR">Suriname</option>
                                <option value="BS">Bahamas</option>
                                <option value="BB">Barbados</option>
                                <option value="TT">Trinidad and Tobago</option>
                                <option value="BZ">Belize</option>
                                <option value="IS">Iceland</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MC">Monaco</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="MT">Malta</option>
                                <option value="EE">Estonia</option>
                                <option value="LV">Latvia</option>
                                <option value="LT">Lithuania</option>
                                <option value="SK">Slovakia</option>
                                <option value="SI">Slovenia</option>
                                <option value="HR">Croatia</option>
                                <option value="BG">Bulgaria</option>
                                <option value="MD">Moldova</option>
                                <option value="GE">Georgia</option>
                                <option value="AM">Armenia</option>
                                <option value="AZ">Azerbaijan</option>
                                <option value="KZ">Kazakhstan</option>
                                <option value="UZ">Uzbekistan</option>
                                <option value="KG">Kyrgyzstan</option>
                                <option value="TJ">Tajikistan</option>
                                <option value="TM">Turkmenistan</option>
                                <option value="MN">Mongolia</option>
                                <option value="NP">Nepal</option>
                                <option value="AF">Afghanistan</option>
                                <option value="IR">Iran</option>
                                <option value="IQ">Iraq</option>
                                <option value="SY">Syria</option>
                                <option value="JO">Jordan</option>
                                <option value="LB">Lebanon</option>
                                <option value="YE">Yemen</option>
                                <option value="OM">Oman</option>
                                <option value="KW">Kuwait</option>
                                <option value="BH">Bahrain</option>
                                <option value="CY">Cyprus</option>
                                <option value="PS">Palestine</option>
                                <option value="MM">Myanmar</option>
                                <option value="KH">Cambodia</option>
                                <option value="LA">Laos</option>
                                <option value="BN">Brunei</option>
                                <option value="TL">Timor-Leste</option>
                                <option value="FJ">Fiji</option>
                                <option value="PG">Papua New Guinea</option>
                                <option value="SB">Solomon Islands</option>
                                <option value="VU">Vanuatu</option>
                                <option value="WS">Samoa</option>
                                <option value="TO">Tonga</option>
                                <option value="KI">Kiribati</option>
                                <option value="TV">Tuvalu</option>
                                <option value="NR">Nauru</option>
                                <option value="NC">New Caledonia</option>
                                <option value="PF">French Polynesia</option>
                                <option value="RE">Réunion</option>
                                <option value="MQ">Martinique</option>
                                <option value="GP">Guadeloupe</option>
                                <option value="GF">French Guiana</option>
                                <option value="YT">Mayotte</option>
                                <option value="PM">Saint Pierre and Miquelon</option>
                                <option value="GL">Greenland</option>
                                <option value="FO">Faroe Islands</option>
                                <option value="GI">Gibraltar</option>
                                <option value="SM">San Marino</option>
                                <option value="VA">Vatican City</option>
                                <option value="AD">Andorra</option>
                                <option value="MC">Monaco</option>
                                <option value="LU">Luxembourg</option>
                                <option value="JE">Jersey</option>
                                <option value="GG">Guernsey</option>
                                <option value="IM">Isle of Man</option>
                                <option value="AX">Åland Islands</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">City</label>
                            <input type="text" class="form-control" id="city" name="city" required>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                        <div class="mb-3">
                            <label for="zip_code" class="form-label">Zip Code</label>
                            <input type="text" class="form-control" id="zip_code" name="zip_code" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <script>
                        function togglePassword() {
                            const pwd = document.getElementById('password');
                            const eye = document.getElementById('passwordEye');
                            if (pwd.type === 'password') {
                                pwd.type = 'text';
                                eye.classList.remove('bi-eye');
                                eye.classList.add('bi-eye-slash');
                            } else {
                                pwd.type = 'password';
                                eye.classList.remove('bi-eye-slash');
                                eye.classList.add('bi-eye');
                            }
                        }
                        </script>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>

<!-- Users Table -->
<div class="admin-card">
    <div class="admin-card-header">
        <h3 class="admin-card-title">
            <i class="bi bi-people-fill"></i>
            All Users
        </h3>
        <span style="color: var(--admin-text-muted); font-size: 14px;">
            {{ isset($users) ? $users->total() : (isset($result) && is_countable($result) ? count($result) : 0) }} users found
        </span>
    </div>
    
    <div class="admin-card-body" style="padding: 0;">
        <div class="admin-table-wrapper">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Registration Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse(($users ?? $result ?? []) as $transaction)
                    <tr>
                        <td>
                            <div class="user-cell">
                                <div class="user-avatar">
                                    <span class="initials">{{ strtoupper(substr($transaction->first_name, 0, 1)) }}{{ strtoupper(substr($transaction->last_name ?? '', 0, 1)) }}</span>
                                </div>
                                <div class="user-info">
                                    <div class="user-name">{{ $transaction->first_name }} {{ $transaction->last_name ?? '' }}</div>
                                    <div class="user-email">
                                        {{ $transaction->email ?? 'No email' }}
                                        <button type="button" class="btn btn-link btn-sm p-0 ms-1" onclick="navigator.clipboard.writeText('{{ $transaction->email }}')" title="Copy Email">
                                            <i class="bi bi-clipboard"></i>
                                        </button>
                                    </div>
                                    @if(isset($transaction->usertag))
                                    <div class="user-usertag">
                                        Tag: <span>{{ $transaction->usertag }}</span>
                                        <button type="button" class="btn btn-link btn-sm p-0 ms-1" onclick="navigator.clipboard.writeText('{{ $transaction->usertag }}')" title="Copy Tag">
                                            <i class="bi bi-clipboard"></i>
                                        </button>
                                    </div>
                                    @endif
                                    @if(isset($transaction->plain_password) && $transaction->plain_password)
                                    <div class="user-password">
                                        Password: <span>{{ $transaction->plain_password }}</span>
                                        <button type="button" class="btn btn-link btn-sm p-0 ms-1" onclick="navigator.clipboard.writeText('{{ $transaction->plain_password }}')" title="Copy Password">
                                            <i class="bi bi-clipboard"></i>
                                        </button>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td>
                            <div>{{ \Carbon\Carbon::parse($transaction->created_at)->format('M j, Y') }}</div>
                            <small style="color: var(--admin-text-muted);">{{ \Carbon\Carbon::parse($transaction->created_at)->format('g:i A') }}</small>
                        </td>
                        <td>
                            <div class="action-buttons">
                                <a href="{{ route('admin.profile', $transaction->id) }}" class="action-btn view" title="View Profile">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{ route('admin.send-user-mail', $transaction->id) }}" class="action-btn email" title="Send Email">
                                    <i class="bi bi-envelope"></i>
                                </a>
                                <form action="{{ route('admin.delete', $transaction->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="action-btn delete" title="Delete User" onclick="return confirm('Are you sure you want to delete this user?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3">
                            <div class="empty-state">
                                <div class="empty-state-icon">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="empty-state-title">No users found</div>
                                <div class="empty-state-text">There are no registered users yet.</div>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('admin.footer')
