<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script>
                All rights reserved
            </div>
            <div>
                <span style="color:rgb(255, 0, 195)">{{ auth()->user()->username }}</span> with <a style="color: red;"
                    href="{{ url('/') }}"> TravelGuru
                </a><i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a
                    href="https://www.facebook.com/findmesagor" target="_blank" rel="nofollow noopener">Sagor</a>
            </div>
        </div>
    </div>
</footer>
