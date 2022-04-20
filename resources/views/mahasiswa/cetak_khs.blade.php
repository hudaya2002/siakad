<!DOCTYPE html> 
<html> 
<head> 
 <title>Kartu Hasil Studi</title> 
</head> 
<body>
    <center>
        <h1>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h1>
        <h2>KARTU HASIL STUDI (KHS)</h2>
    </center>
        <p><b>Nama: </b>{{$mahasiswa->nama}}</p>
        <p><b>Nim: </b>{{$mahasiswa->nim}}</p>
        <p><b>Kelas: </b>{{$mahasiswa->kelas->nama_kelas}}</p>


        <table style="width:95%; margin:20px auto; border-style: solid;"> 
 	 	<thead> 
            <tr> 
                <th style="border-bottom-style: solid; border-right-style: solid;">Mata Kuliah</th>
                <th style="border-bottom-style: solid; border-right-style: solid;">SKS</th>
                <th style="border-bottom-style: solid; border-right-style: solid;">Semester</th>
                <th style="border-bottom-style: solid; border-right-style: solid;">Nilai Angka</th>
                <th style="border-bottom-style: solid;">Nilai Huruf</th>
            </tr> 
 	 	</thead> 
 	 	<tbody> 
            @foreach ($matakuliah as $ls)
            <tr>
                <td style="border-right-style: groove; ">
                    {{$ls->matakuliah->nama_matkul}}
                </td>
                <td style="border-right-style: groove; text-align: center;">
                    {{$ls->matakuliah->sks}}
                </td>
                <td style="border-right-style: groove; text-align: center;">
                    {{$ls->matakuliah->semester}}
                </td>
                <td style="border-right-style: groove; text-align: center;">
                    {{$ls ->nilai_angka}}
                </td>
                <td style="text-align: center;">
                    {{$ls ->nilai_huruf}}
                </td>
            </tr>
            @endforeach
 	 	</tbody> 
 	</table>
</body>