<form action="">
    <div class="form-group">
        <div class="row">
            <div class="col-lg-6">
                <div class="title-field">{{ stringlang('Name', 'Nama') }}</div>
                <input type="text" name="nama" placeholder="{{ stringlang('Insert your name', 'Masukkan nama anda') }}" class="form-control txt-box">
            </div>
            <div class="col-lg-6">
                <div class="title-field">Position</div>
                <input type="text" name="jabatan" placeholder="{{ stringlang('Insert your title', 'Masukkan jabatan anda') }}" class="form-control txt-box">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="title-field">Phone Number</div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text cl-black" id="basic-addon1">+62</span>
            </div>
            <input type="text" class="form-control txt-box" name="phone" placeholder="{{ stringlang('Phone Number', 'Nomor Telepon') }}" aria-label="Username" aria-describedby="basic-addon1">
        </div>
    </div>
    <div class="form-group">
        <div class="title-field">Email</div>
        <input type="text" name="email" placeholder="{{ stringlang('Insert your email', 'Masukkan email anda') }}" class="form-control txt-box">
    </div>
    <div class="form-group">
        <div class="title-field">{{ stringlang('Company','Perusahaan') }}</div>
        <input type="mail" name="company" placeholder="Insert your company" class="form-control txt-box">
    </div>
    <div class="form-group">
        <div class="title-field">Industry</div>
        <input type="mail" name="industry" placeholder="Insert your industry" class="form-control txt-box">
    </div>
    <div class="form-group mb-4">
        <div class="title-field">{{ stringlang('Message','Pesan') }}</div>
        <textarea name="message" class="form-control txt-area no-resize" rows="3" placeholder="Message" id=""></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn-oval btn-view-detail btn-white-orange ">{{ stringlang('Submit', 'Kirim') }}</button>
    </div>
</form>