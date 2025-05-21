<html>
    <head>
        <title>

        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
            function formvalidation(){

                var nrp=document.getElementById("nrp").value;
                var nama=document.getElementById("nama").value;

                if(isNaN (nrp)) //nrp harus ada isinya
                {
                //alert ("NRP harus diisi!");
                Swal.fire({
                    title: "Hi, masih ada yang kurang!",
                    text: "Mohon sesuaikan NRP kamu, haanya masukkan angka",
                    icon: "question"
                    })
                document.getElementById("nrp").focus();
                return false;
                }

                if(nrp.length !==10) //nrp harus ada isinya
                {
                //alert ("NRP harus diisi!");
                Swal.fire({
                    title: "Hi, masih ada yang kurang!",
                    text: "Mohon sesuaikan NRP kamu, masukkan 10 digit angka",
                    icon: "question"
                    })
                document.getElementById("nrp").focus();
                return false;
                }

                if(nama.length==0) //nrp harus ada isinya
                {
                //alert ("Nama harus diisi!");
                Swal.fire({
                    title: "Hi, masih ada yang kurang!",
                    text: "Mohon isi nama kamu",
                    icon: "question"
                    })
                document.getElementById("nama").focus();
                return false;
                }
            }
        </script>
    </head>
        <body>
            <div class="container">
                <h3> Form Pendaftaran ISE!</h3>
                <form id="frmpendaftaran" action="https://google.co.id" method="get" onsubmit="return formvalidation();">
                NRP:
                <input type="text" id="nrp" class="form-control" placeholder="silahkan isi NRP 10 digit berbentuk angka" name="nrp" >
                <br>
                Nama:
                <input type="text" id="nama" class="form-control" placeholder="silahkan isi Nama, minim satu digit, harus diisi" name="nama" >
                <br>
                <input type="submit" class="btn btn-primary" value = "daftar">
            </form>
        </body>
    </html>
