<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="{{ url('assets/img/logo.png') }}">

<head>
  <meta charset="utf-8">
  <title>Buku Tamu - SDN 1 Sumbersewu</title>
  <link rel="stylesheet" href="{{url('/form/css/style.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src={{ asset("/pengguna/assets/js/parsley.js")}}></script>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>
  <form id="myForm" action="{{ url ('/simpan-bukutamu')}}" method="POST" autocomplete="off" name="formInput">
    @csrf
    <h1 id="judul" style="text-align: center">Buku Tamu</h1>
    <h1 id="judul" style="text-align: center">SDN 1 Sumbersewu</h1>

    <div style="text-align:center;">
      <span class="step" id="step-1">1</span>&nbsp;&nbsp;
      <span class="step" id="step-2">2</span>&nbsp;&nbsp;
    </div>
    <br>
    <h3>Informasi Pribadi</h3>

    <div class="tab" id="tab-1">

      <div class="input-group">
        <label for="name" style="color:#000000">No Handphone</label>
        <input type="text" name="hp" id="hp" class="form-control" placeholder="Silahkan isi no handphone anda"
          minlength="8" maxlength="13" value="{{old('hp')}}" data-parsley-type="integer" data-parsley-trigger="keyup"
          required />
        {{-- @error('hp')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}
      </div>

      <div class="input-group">
        <label for="name" style="color:#000000">Nama Lengkap</label>
        <input type="text" name="name" id="name" placeholder="Silahkan isi nama anda" maxlength="30"
          value="{{old('name')}}" data-parsley-minwords="3" data-parsley-maxwords="30"
          data-parsley-pattern="/(^[a-zA-Z][a-zA-Z\s]{0,30}[a-zA-Z]$)/" data-parsley-trigger="keyup" required />
        {{-- @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}
      </div>

      <div class="form-group mb-3">
        <label class="gender" for="gender" style="color:#000000">Jenis Kelamin</label>
        <select class="custom-select my-1 mr-sm-2" name="gender" id="gender" value={{collect(old('gender'))}} required>
          <option selected="false" disabled="disabled">
          <option value="Pria">Pria</option>
          <option value="Wanita">Wanita</option>
        </select>
      </div>

      {{-- <div class="input-group">
        <label for="email" style="color:#000000">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Silahkan isi email anda" />
      </div> --}}

      <div class="input-group">
        <label for="email" style="color:#000000">Email</label>
        <input type="text" name="email" id="email" class="form-control" placeholder="Silahkan isi email anda"
          maxlength="35" value="{{old('email')}}" data-parsley-type="email" data-parsley-trigger="keyup"
          data-parsley-error-message="Email anda tidak mengandung '@gmail.com'" required />
        {{-- @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}
      </div>

      <div class="input-group">
        <label for="address" style="color:#000000">Alamat</label>
        <input type="text" name="address" id="address" class="form-control" placeholder="Silahkan isi alamat anda"
          maxlength="50" value="{{old('address')}}" data-parsley-trigger="keyup" required />
      </div>

      <div class="input-group">
        <label for="age" style="color:#000000">Usia</label>
        <input type="text" name="age" id="age" class="form-control" placeholder="Silahkan isi umur anda (contoh: 27)"
          maxlength="3" value="{{old('age')}}" onkeypress="return event.charCode >= 48 && event.charCode <=57"
          data-parsley-type="integer" data-parsley-trigger="keyup" required />
        {{-- @error('age')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}
      </div>

      <div class="index-btn-wrapper">
        <div class="index-btn" onclick="run(1, 2);">Next</div>
      </div>
    </div>

    <div class="tab" id="tab-2">
      <h3>Riwayat</h3>

      <div class="input-group">
        <label for="institute" style="color:#000000">Nama instansi</label>
        <input type="text" name="institute" id="institute" class="form-control"
          placeholder="Silahkan isi nama instansi anda" maxlength="35" value="{{old('institute')}}"
          data-parsley-pattern="/(^[a-zA-Z][a-zA-Z\s]{0,35}[a-zA-Z]$)/" data-parsley-trigger="keyup" required />
        {{-- @error('institute')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}
      </div>

      <div class="input-group">
        <label for="nipnim" style="color:#000000">NIP/NIM</label>
        <input type="text" name="nipnim" id="nipnim" class="form-control" placeholder="Silahkan isi nip/nim anda"
          maxlength="20" value="{{old('nipnim')}}" onkeypress="return event.charCode >= 48 && event.charCode <=57"
          data-parsley-type="integer" data-parsley-trigger="keyup" required />
        {{-- @error('nipnim')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}
      </div>

      <div class="form-group mb-3">
        <label class="label" for="job" style="color:#000000">Pekerjaan</label>
        <select class="custom-select my-1 mr-sm-2" name="job" id="job" required>
          <option selected="false" disabled="disabled">Silahkan Pilih Pekerjaan</option>
          @foreach ($job as $p)
          <option value="{{ $p->id }}">{{$p->job_type}}</option>
          @endforeach
        </select>
      </div><br><br>

      <div class="form-group mb-3">
        <label class="label" for="education" style="color:#000000">Pendidikan</label>
        <select class="custom-select my-1 mr-sm-2" name="education" id="education" required>
          <option selected="false" disabled="disabled">Silahkan Pilih Pendidikan</option>
          @foreach ($education as $p)
          <option value="{{ $p->id }}">{{$p->education_type}}</option>
          @endforeach
        </select>
      </div><br><br>

      <div class="index-btn-wrapper">
        <div class="index-btn" onclick="run(2, 1);">Previous</div>
        <button class="index-btn" type="submit" name="submit" style="background: blue;">Submit</button>
      </div>
    </div>
  </form>

  <script type="text/javascript">
    $(function(){
      $("#myForm").parsley();
    })
      // Default tab
      $(".tab").css("display", "none");
      $("#tab-1").css("display", "block");

      function run(hideTab, showTab){
        if(hideTab < showTab){ // If not press previous button
          // Validation if press next button
          var currentTab = 0;
          x = $('#tab-'+hideTab);
          y = $(x).find("input")
          z = $(x).find("select")
          for (i = 0; i < y.length; i++){
            if (y[i].value == ""){
              $(y[i]).css("background", "#ffdddd");
              return false;
            }
          }
          for (i = 0; i < z.length; i++){
            if (z[i].value == ""){
              $(z[i]).css("background", "#ffdddd");
              return false;
            }
          }
        }

        // Progress bar
        for (i = 1; i < showTab; i++){
          $("#step-"+i).css("opacity", "1");
        }

        // Switch tab
        $("#tab-"+hideTab).css("display", "none");
        $("#tab-"+showTab).css("display", "block");
        $("input").css("background", "#fff");
      }


      $('#hp').on('keyup', function (){

        $value = $(this).val();
        // alert ($value);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        // alert ($value);
        $.ajax({

          type      : 'post',
          url       : '{{ URL::to('cekcustomer') }}',
          dataType  : 'json',
          data      : {'search':$value},
          success   : function(data)
          {

              // dataconv = JSON.parse(data);
            $.each(data, function (i, id) {
              // var $dataString = JSON.stringify(data)
              // console.log(data[0].name);
              // alert(data[0].address);

              $('#name').val(data[0].name).attr('readonly', true).css('background-color' , '#DEDEDE').attr('disabled', true);
              $("#gender option[value="+data[0].gender).attr('selected', 'true');
              $("#gender").attr('disabled', true);
              $('#email').val(data[0].email).attr('readonly', true).css('background-color' , '#DEDEDE');
              $('#address').val(data[0].address).attr('readonly', true).css('background-color' , '#DEDEDE');
              $('#age').val(data[0].age).attr('readonly', true).css('background-color' , '#DEDEDE');
              $('#institute').val(data[0].institute).attr('readonly', true).css('background-color' , '#DEDEDE');
              $('#nipnim').val(data[0].nipnim).attr('readonly', true).css('background-color' , '#DEDEDE');
              $("#job option[value='"+data[0].id_job).attr('selected', 'true');
              $("#job").attr('disabled', true);
              $("#education option[value='"+data[0].id_education).attr('selected', 'true');
              $("#education").attr('disabled', true);
            });

          }
        });
      })


      $(document).ready (function() {
        $('#myForm').formValidation({
        framework: 'bootstrap',
        excluded: 'disabled',
        icon: {
        valid: 'glyphicon glyphicon-ok',
        invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            emailUser: {
            validators: {
            notEmpty: {
            message: 'Email Tidak Boleh Kosong'
            },
            emailAddress: {
            message: 'Email Tidak Valid'
            }
            }
            },
        }
        })
        });

        // function ValidateEmail(mail)
        // {
        // if (/mysite@ourearth.com/.test(emailUser))
        // {
        // return (true)
        // }
        // alert("Masukkan e-Mail Dengan Ben0ar")
        // return (false)
        // }

  </script>


</body>

</html>
