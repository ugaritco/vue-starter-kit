<?php

return [
    'login' => 'resources/js/apps/auth/pages/Login.vue',
    'register' => 'resources/js/apps/auth/pages/Register.vue',
    'welcome' => 'resources/js/apps/web/pages/Welcome.vue',
    'profile' => 'resources/js/apps/panel/pages/settings/Profile.vue',
    'security' => 'resources/js/apps/panel/pages/settings/Security.vue',
    'verify_email' => 'resources/js/apps/auth/pages/VerifyEmail.vue',
    'two_factor_challenge' => 'resources/js/apps/auth/pages/TwoFactorChallenge.vue',
    'confirm_password' => 'resources/js/apps/auth/pages/ConfirmPassword.vue',
    'auth_types' => 'resources/js/types/auth.ts',

    'two_factor_files' => [
        'resources/js/components/ManageTwoFactor.vue',
        'resources/js/components/TwoFactorSetupModal.vue',
        'resources/js/components/TwoFactorRecoveryCodes.vue',
        'resources/js/components/ui/input-otp/index.ts',
        'resources/js/components/ui/input-otp/InputOTP.vue',
        'resources/js/components/ui/input-otp/InputOTPGroup.vue',
        'resources/js/components/ui/input-otp/InputOTPSeparator.vue',
        'resources/js/components/ui/input-otp/InputOTPSlot.vue',
        'resources/js/composables/useTwoFactorAuth.ts',
    ],

    'two_factor_otp_package' => 'vue-input-otp',

    'passkey_files' => [
        'resources/js/components/PasskeyItem.vue',
        'resources/js/components/ManagePasskeys.vue',
        'resources/js/components/PasskeyRegister.vue',
        'resources/js/components/PasskeyVerify.vue',
    ],
];
