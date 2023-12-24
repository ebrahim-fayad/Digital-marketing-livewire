@include('admin.auth.layouts.head')
<body>
    <!-- Content -->
    @if (session('adminAlert'))
    <script>
        window.onload=()=>{

            Swal.fire({
                title: "Bad Login!",
                text: "{{ session('adminAlert') }}",
                icon: "error"
            });
        }
    </script>
    @endif
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        @include('admin.auth.layouts.logo')
                        <!-- /Logo -->
                        <h4 class="mb-2">Welcome to Sneat! 👋</h4>
                        <p class="mb-4">Please sign-in to your account and start the adventure</p>
                        @livewire('admin.auth.admin-login')

                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>

    <!-- / Content -->


@include('admin.auth.layouts.scripts')
</body>

</html>
