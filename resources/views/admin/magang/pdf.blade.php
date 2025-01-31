<!DOCTYPE html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Surat Penempatan - {{ $mahasiswa['nama'] }} - {{ $mahasiswa['nim'] }}</title>
    <style>
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            padding: 30px;
        }
        /** Define the footer rules **/
        footer {
            padding: 30px;
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
        }
        * {
            font-family: 'Times New Roman', Times, serif;
        }
        #halaman{
            margin-left: 3cm;
            margin-right:3cm;
            margin-bottom: 3cm; 
            margin-top:3cm; 
            font-size: 12px;
        }
        .kop{
            float: left;
        }
        .kop-alamat{
            clear: left;
            border: 2px solid purple;
            width: 100%;
            font-size: 8px;
        }
        .head{
            color: purple;
            line-height: 0.7cm;
        }
        .isi{
            margin-left:1cm; 
        }
        .isi p{
            margin: 0;
        }
        table.mahasiswa tr th{
            border: 1px solid black;
        }
        table.mahasiswa tr td{
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <header>
        <img src="img/kop-feb.png" width="60%"/>
    </header>
    <div id="halaman">
        <table class="table">
            <tr>
                <td style="width: 20px">Nomor </td>
                <td style="width: 20px">:</td>
                <td style="width: 150px">.../ FEB-UNSIQ / ... / ....</td>
                <td style="width: 20px"></td>
                <td style="width: 20px"></td>
                <td style="width: 150px">Wonosobo, ............ </td>
            </tr>
            <tr>
                <td style="width: 20px">Lamp </td>
                <td style="width: 20px">:</td>
                <td style="width: 150px">-</td>
                <td style="width: 20px"></td>
                <td style="width: 20px"></td>
                <td style="width: 150px"></td>
            </tr>
            <tr>
                <td style="width: 20px">Perihal </td>
                <td style="width: 20px">:</td>
                <td style="width: 150px"><b><u>Surat Penempatan Magang</u></b></td>
                <td style="width: 20px"></td>
                <td style="width: 20px"></td>
                <td style="width: 150px">Kepada Yth.</td>
            </tr>
            <tr>
                <td style="width: 20px"></td>
                <td style="width: 20px"></td>
                <td style="width: 150px"></td>
                <td style="width: 20px"></td>
                <td style="width: 20px"></td>
                <td style="width: 150px">Pimpinan Kant</td>
            </tr>
            <tr>
                <td style="width: 20px"></td>
                <td style="width: 20px"></td>
                <td style="width: 150px"></td>
                <td style="width: 20px"></td>
                <td style="width: 20px"></td>
                <td style="width: 150px">Di-</td>
            </tr>
            <tr>
                <td style="width: 20px"></td>
                <td style="width: 20px"></td>
                <td style="width: 150px"></td>
                <td style="width: 20px"></td>
                <td style="width: 20px"></td>
                <td style="width: 20px"><u class="ms-4">Tempat</u></td>
            </tr>
        </table>
        <div class="isi">
            <p>Assalamu’alaikumWr. Wb.</p>
            <p style="text-indent: 1cm;text-align: justify;">Puji syukur kehadirat Allah SWT yang telah memberikan segala yang terbaik bagi kita semua, Amin... Sholawat serta salam kita haturkan kepada Nabi Besar Muhammad SAW.</p>
            <p style="text-indent: 1cm;text-align: justify;">Dengan hormat, bersama surat ini kami sampaikan bahwa mahasiswa/i kami dibawah ini :</p>
            <br>
            <table class="table table-bordered mahasiswa">
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Program Studi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td>1</td>
                        <td>{{$mahasiswa['nama']}}</td>
                        <td>{{$mahasiswa['nim']}}</td>
                        <td>{{$mahasiswa['prodi']}}</td>
                    </tr>
                </tbody>
            </table>
            <p style="text-indent: 1cm;text-align: justify;">Akan melakukan kegiatan magang yang dilaksanakan dalam kurun waktu 2 (Dua) bulan pertanggal ............................ di Instansi / Perusahaan yang Bapak/Ibu pimpin. Kami mohon agar mahasiswa tersebut  untuk dapat dibimbing dan diberi pengarahan pada saat kegiatan magang. Akan melakukan kegiatan magang yang dilaksanakan dalam kurun waktu 2 (Dua) bulan pertanggal .............................  di Instansi / Perusahaan yang Bapak/Ibu pimpin. Kami mohon agar mahasiswa tersebut  untuk dapat dibimbing dan diberi pengarahan pada saat kegiatan magang.</p>
            <p style="text-indent: 1cm;text-align: justify;">Demikian surat penempatan ini, atas perhatiannya kami sampaikan terima kasih.</p>
            <p>Wassalamu’alaikum Wr.Wb.</p>
            <br>
            <table class="table">
                <tr>
                    <td style="width: 20px"> </td>
                    <td style="width: 20px"></td>
                    <td style="width: 150px"></td>
                    <td style="width: 20px"></td>
                    <td style="width: 20px"></td>
                    <td style="width: 150px">Dekan</td>
                </tr>
                <br>
                <br>
                <tr>
                    <td style="width: 20px"> </td>
                    <td style="width: 20px"></td>
                    <td style="width: 150px"></td>
                    <td style="width: 20px"></td>
                    <td style="width: 20px"></td>
                    <td style="width: 150px"><u>Dr. M. Elfan Kaukab., S.E., M.M., M.H.I.</u></td>
                </tr>
            </table>
        </div>
        
    </div>
    <footer>
        <img src="img/footer-kop.png" width="100%"/>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
