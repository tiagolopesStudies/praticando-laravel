<x-guest-layout title="Reset Password" cssClass="page-login">
    <form action="" method="post">
        <div class="form-group">
            <input type="email" placeholder="Your Email" />
        </div>

        <button class="btn btn-primary btn-login w-full">
            Request password reset
        </button>

        <div class="login-text-dont-have-account">
            Already have an account? -
            <a href="{{ route('login') }}"> Click here to login </a>
        </div>
    </form>
</x-guest-layout>
