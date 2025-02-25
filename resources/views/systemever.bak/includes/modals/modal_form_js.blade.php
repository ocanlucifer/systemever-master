<script>    
    $(document).ready(function() {
      $('#{{$pointer}}').on('submit', function(e){
        e.preventDefault();
        Swal.fire({
            title: 'Sending...',
            text: '{{ stringlang("Please wait, we are sending your message", "Mohon tunggu, kami sedang mengirimkan pesan anda") }}',
            imageUrl: '{{asset('assets/img/Dual Ring-1s-200px.gif')}}',
            imageWidth: 100,
            imageHeight: 100,
            imageAlt: 'Sending Message',
            showConfirmButton:false
        });
    
        $('.submitme_{{$pointer}}').blur();
        var formData = new FormData($(this)[0]); 
        console.log("le form : ", formData);
        $.ajax({
            url : $(this).attr('action'),
            type : "POST",
            data: formData,
            contentType: false,
            processData: false,
            success : function (response) {
                console.log("SUCCESS" , response);
                if (response) {
                    if (response.message == 'success') {
                        Swal.fire({
                            title: 'Success!',
                            text: '{{ stringlang("Your inquiry information has beed received.  Please check your email (Inbox or Spam folder) and we will get you back soon", "Permintaan anda telah diterima. Silahkan periksa email Anda (Inbox atau folder Spam) dan kami akan segera menghubungi Anda kembali") }}',
                            icon: 'success',
                            confirmButtonColor: '#FF9400',
                            confirmButtonText: 'OK'
                        })
                    } else {
                        var message = '{{ stringlang("System error, please contact administrator", "System error, silahkan contact administrator") }}';
                        if (response.data.email) {
                            message = '{{ stringlang("Please fill your email input with correct format", "Mohon isi email dengan format yang benar") }}';
                        }
                        if (response.data.phone) {
                            message = '{{ stringlang("Please fill your phone input with correct number format", "Mohon isi telepon dengan format yang benar") }}';
                        }
                        console.log("response.data.g-recaptcha-response", response.data['g-recaptcha-response']);
                        if (response.data['g-recaptcha-response']) {
                            message = '{{ stringlang("Please verifiy the captcha", "Mohon lakukan verifikasi captcha") }}';
                        }
                        Swal.fire({
                            title: 'Error!',
                            text: message,
                            icon: 'warning',
                            confirmButtonColor: '#FF9400',
                            confirmButtonText: 'OK'
                        })
                    }
                } else {
                    Swal.fire({
                        title: 'Error!',
                        text: '{{ stringlang("System error, please contact administrator", "System error, silahkan contact administrator") }}',
                        icon: 'warning',
                        confirmButtonColor: '#FF9400',
                        confirmButtonText: 'OK'
                    })
                }
            }, 
            error: function(jqXHR, textStatus, errorThrown){
                Swal.fire({
                    title: 'Error!',
                    text: '{{ stringlang("System error, please contact administrator", "System error, silahkan contact administrator") }}',
                    icon: 'warning',
                    confirmButtonColor: '#FF9400',
                    confirmButtonText: 'OK'
                })
            }
        })
      });
    });
    </script>
    <script>
        $(".langselect").click(function(){
            $(".langselect i").removeClass("fa-check-circle");
            $(".langselect i").removeClass("i-active");
            $(".langselect i").addClass("fa-circle");
            $(".langselect i").addClass("i-inactive");
            setTimeout(() => {
                var key = $(this).attr("data-key");
                $(".langselect-" + key + " i").addClass("fa-check-circle");
                $(".langselect-" + key + " i").addClass("i-active");
                $(".langselect-" + key + " i").removeClass("fa-circle");
                $(".langselect-" + key + " i").removeClass("fa-inactive");
                $("#lang").val(key);
            }, 300);
        });
    </script>
    <style>
        .i-inactive {
            font-size: 26px;
            border: solid 3px #e2e2e2;
            color: #fff;
            border-radius: 100px;
            line-height: 22px;
            margin-right: 7px;
        }

        .i-active {
            color: #009944;
            font-size: 29px;
            border: solid 3px #648327;
            border-radius: 100px;
            line-height: 22px;
            margin-right: 7px;
        }

        .lang-span {
            color: #7f7f7f;
        }
    </style>