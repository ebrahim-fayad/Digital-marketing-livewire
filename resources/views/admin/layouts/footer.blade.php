
                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div
                            class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                 made with ❤️ by Ibrahim Fayd © {{ date('Y') }}
                            </div>

                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('admin-assets') }}//vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('admin-assets') }}//vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('admin-assets') }}//vendor/js/bootstrap.js"></script>
    <script src="{{ asset('admin-assets') }}//vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="{{ asset('admin-assets') }}//vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('admin-assets') }}//vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="{{ asset('admin-assets') }}//js/main.js"></script>

    <!-- Page JS -->
    <script src="{{ asset('admin-assets') }}//js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", () => {
        Livewire.hook('morph.updated', ({ el, component }) => {
            const myAlert = document.querySelector('.my-success-alert')
           if(myAlert){
            setTimeout(()=>{
                myAlert.style.display='none'
            },1000)
           }
        })
    });
    window.addEventListener('createdModalToggle', event => {
    $('#createdModalToggle').modal('toggle');
})
    window.addEventListener('editModalToggle', event => {
    $('#editModalToggle').modal('toggle');
})
    window.addEventListener('deleteModalToggle', event => {
    $('#deleteModalToggle').modal('toggle');
})
    window.addEventListener('showModalToggle', event => {
    $('#showModalToggle').modal('toggle');
})

</script>
</body>

</html>
