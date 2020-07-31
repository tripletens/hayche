@if (count($errors) > 0 )
    @foreach ( $errors->all() as $error)
        <span class="alert alert-danger btn btn-red white-text" style="color:white;">
            {{ $error }}
        </span>
    @endforeach
@endif
@if ( session('success') )
        <span class="alert alert-success btn btn-green white-text">
            {{ session('success') }}
        </span>
            {{-- <script>
                Swal.fire({
                    position: 'top-end',
                    type: 'success',
                    title: "{{ session('success') }}",
                    showConfirmButton: false,
                    timer: 5000
                })
            </script> --}}

@endif
@if ( session('error') )

        <span class="alert alert-danger btn btn-red white-text" style="color:white;border:2px solid red;">
            {{ session('error') }}
        </span>
           {{-- <script>
                Swal.fire({
                    position: 'top-end',
                    type: 'error',
                    title: "{{ session('error') }}",
                    showConfirmButton: false,
                    timer: 5000
                })

            </script> --}}
@endif
