<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        :root {
            --primary-color: #4361ee;
            --primary-dark: #3a56d4;
            --secondary-color: #7209b7;
            --success-color: #06d6a0;
            --danger-color: #ef476f;
            --warning-color: #ffd166;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --gray-color: #6c757d;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f7fb;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        
        .container {
            width: 100%;
            max-width: 550px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }
        
        .form-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 25px 30px;
            text-align: center;
        }
        
        .form-header h1 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 8px;
        }
        
        .form-header p {
            opacity: 0.9;
            font-size: 15px;
        }
        
        .form-body {
            padding: 30px;
        }
        
        .form-group {
            margin-bottom: 20px;
            position: relative;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--dark-color);
            font-size: 15px;
        }
        
        .required::after {
            content: "*";
            color: var(--danger-color);
            margin-left: 4px;
        }
        
        input, select, textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 15px;
            transition: all 0.3s ease;
        }
        
        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.15);
        }
        
        .error {
            color: var(--danger-color);
            font-size: 13px;
            margin-top: 5px;
            display: none;
        }
        
        input.invalid, select.invalid, textarea.invalid {
            border-color: var(--danger-color);
        }
        
        input.invalid + .error, select.invalid + .error, textarea.invalid + .error {
            display: block;
        }
        
        .radio-group {
            display: flex;
            gap: 20px;
            margin-top: 5px;
        }
        
        .radio-option {
            display: flex;
            align-items: center;
        }
        
        .radio-option input {
            width: auto;
            margin-right: 8px;
        }
        
        .checkbox-group {
            display: flex;
            align-items: baseline;
            margin-top: 5px;
        }
        
        .checkbox-group input {
            width: auto;
            margin-right: 10px;
        }
        
        .tags-input {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 8px;
            padding: 8px 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            min-height: 50px;
        }
        
        .tags-input:focus-within {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.15);
        }
        
        .tag {
            background-color: rgba(67, 97, 238, 0.1);
            color: var(--primary-color);
            padding: 4px 10px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            font-size: 14px;
        }
        
        .tag button {
            background: none;
            border: none;
            color: var(--primary-color);
            margin-left: 6px;
            cursor: pointer;
            font-size: 16px;
            line-height: 1;
        }
        
        .tag-input {
            flex: 1;
            min-width: 80px;
            border: none;
            outline: none;
            padding: 5px 0;
            font-size: 15px;
        }
        
        .submit-btn {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            border-radius: 6px;
            padding: 14px 20px;
            font-size: 16px;
            font-weight: 600;
            width: 100%;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
        }
        
        .submit-btn:hover {
            background: linear-gradient(135deg, var(--primary-dark), var(--secondary-color));
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(67, 97, 238, 0.3);
        }
        
        .form-footer {
            text-align: center;
            margin-top: 25px;
            color: var(--gray-color);
            font-size: 14px;
        }
        
        .form-footer a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
        }
        
        .alert {
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 20px;
            display: none;
        }
        
        .alert.success {
            background-color: rgba(6, 214, 160, 0.15);
            color: var(--success-color);
            border: 1px solid rgba(6, 214, 160, 0.3);
        }
        
        .alert.error {
            background-color: rgba(239, 71, 111, 0.15);
            color: var(--danger-color);
            border: 1px solid rgba(239, 71, 111, 0.3);
        }
        
        @media (max-width: 576px) {
            .form-body {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-header">
            <h1>Create Account</h1>
            <p>Fill in the form below to register</p>
        </div>
        
        <div class="form-body">
            <div class="alert success" id="successAlert">
                Registration successful! Redirecting...
            </div>
            
            <div class="alert error" id="errorAlert">
                Please fix the errors in the form.
            </div>
            
            <form id="registrationForm" method="POST" action="/register">
                <div class="form-group">
                    <label for="full_name" class="required">Full Name</label>
                    <input type="text" id="full_name" name="full_name" placeholder="Enter your full name" maxlength="50">
                    <div class="error">Please enter your full name (max 50 characters)</div>
                </div>
                
                <div class="form-group">
                    <label for="email" class="required">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email address">
                    <div class="error">Please enter a valid email address</div>
                </div>
                
                <div class="form-group">
                    <label for="password" class="required">Password</label>
                    <input type="password" id="password" name="password" placeholder="Create a password (min 8 characters)">
                    <div class="error">Password must be at least 8 characters long</div>
                </div>
                
                <div class="form-group">
                    <label for="confirm_password" class="required">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password">
                    <div class="error">Passwords do not match</div>
                </div>
                
                <div class="form-group">
                    <label class="required">Gender</label>
                    <div class="radio-group">
                        <div class="radio-option">
                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male">Male</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Female</label>
                        </div>
                    </div>
                    <div class="error">Please select your gender</div>
                </div>
                
                <div class="form-group">
                    <label for="age_group" class="required">Age Group</label>
                    <select id="age_group" name="age_group">
                        <option value="" selected disabled>Select your age group</option>
                        <option value="below_18">Below 18</option>
                        <option value="18_25">18 - 25</option>
                        <option value="26_35">26 - 35</option>
                        <option value="36_45">36 - 45</option>
                        <option value="46_55">46 - 55</option>
                        <option value="above_55">Above 55</option>
                    </select>
                    <div class="error">Please select your age group</div>
                </div>
                
                <div class="form-group">
                    <label for="education_level" class="required">Education Level</label>
                    <select id="education_level" name="education_level">
                        <option value="" selected disabled>Select your education level</option>
                        <option value="school">School</option>
                        <option value="university">University</option>
                        <option value="post_graduate">Post Graduate</option>
                    </select>
                    <div class="error">Please select your education level</div>
                </div>
                
                <div class="form-group">
                    <label for="interests" class="required">Interests</label>
                    <div class="tags-input" id="tagsContainer">
                        <input type="text" class="tag-input" id="tagInput" placeholder="Type interests and press Enter">
                    </div>
                    <input type="hidden" id="interests" name="interests">
                    <div class="error">Please add at least one interest</div>
                </div>
                
                <div class="form-group">
                    <label for="phone">Phone Number (Optional)</label>
                    <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" maxlength="10">
                    <div class="error">Phone number should be maximum 10 digits</div>
                </div>
                
                <div class="form-group">
                    <label for="address" class="required">Address</label>
                    <textarea id="address" name="address" rows="3" placeholder="Enter your address"></textarea>
                    <div class="error">Please enter your address</div>
                </div>
                
                <div class="form-group">
                    <div class="checkbox-group">
                        <input type="checkbox" id="work" name="work" value="1">
                        <label for="work" class="required">I am currently employed</label>
                    </div>
                    <div class="error">This field is required</div>
                </div>
                
                <button type="submit" class="submit-btn">Register</button>
                
                <div class="form-footer">
                    Already have an account? <a href="/login">Log in</a>
                </div>
            </form>
        </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('registrationForm');
            const successAlert = document.getElementById('successAlert');
            const errorAlert = document.getElementById('errorAlert');
            const tagsContainer = document.getElementById('tagsContainer');
            const tagInput = document.getElementById('tagInput');
            const interestsField = document.getElementById('interests');
            
            // Handle tags/interests input
            const tags = [];
            
            tagInput.addEventListener('keydown', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    const value = this.value.trim();
                    
                    if (value && !tags.includes(value)) {
                        addTag(value);
                        this.value = '';
                        updateInterestsField();
                    }
                }
            });
            
            function addTag(value) {
                tags.push(value);
                
                const tag = document.createElement('div');
                tag.className = 'tag';
                tag.innerHTML = `${value}<button type="button" data-value="${value}">&times;</button>`;
                
                tagsContainer.insertBefore(tag, tagInput);
                
                tag.querySelector('button').addEventListener('click', function() {
                    const value = this.getAttribute('data-value');
                    removeTag(value);
                    this.parentElement.remove();
                });
            }
            
            function removeTag(value) {
                const index = tags.indexOf(value);
                if (index !== -1) {
                    tags.splice(index, 1);
                }
                updateInterestsField();
            }
            
            function updateInterestsField() {
                interestsField.value = tags.join(', ');
            }
            
            // Form validation
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                if (validateForm()) {
                    // Show success message and simulate form submission
                    successAlert.style.display = 'block';
                    errorAlert.style.display = 'none';
                    
                    // Simulate form submission (replace with actual submission)
                    setTimeout(() => {
                        window.location.href = '/SUCCESS';
                    }, 2000);
                } else {
                    // Show error message
                    errorAlert.style.display = 'block';
                    successAlert.style.display = 'none';
                }
            });
            
            function validateForm() {
                let isValid = true;
                
                // Reset previous errors
                const