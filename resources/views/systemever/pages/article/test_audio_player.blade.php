{{-- @extends('systemever/pages/article/layout_article', [
    'spesifice_page_seo' => 'Article' . activelang()
]) --}}
@extends('systemever/layouts/windi', [
'spesifice_page_seo' => 'Home ' . activelang()
])
@section('custom_css')
<style>
    /* Modal */
    .modal {
        display: none;
        position: fixed;
        z-index: 999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.6);
    }

    .modal-content {
        background: #fff;
        margin: 10% auto;
        padding: 20px;
        width: 90%;
        max-width: 500px;
        border-radius: 10px;
        position: relative;
        text-align: center;
    }

    .close-modal {
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 24px;
        cursor: pointer;
    }

    .close-modal:hover {
        color: red;
    }
</style>
@endsection

@section('content')
    <!-- Play Button -->
    <button id="openFormModal">Play</button>

    <!-- Modal 1: Form -->
    <div id="formModal" class="modal">
        <div class="modal-content">
            <span class="close-modal" onclick="closeModal('formModal')">&times;</span>
            <h3>Isi Data Dulu</h3>
            <form id="playForm">
                <input type="text" name="name" placeholder="Nama kamu" required><br><br>
                <input type="email" name="email" placeholder="Email kamu" required><br><br>
                <button type="submit">Submit & Play</button>
            </form>
        </div>
    </div>

    <!-- Modal 2: Audio Player -->
    <div id="audioModal" class="modal">
        <div class="modal-content">
            <span class="close-modal" onclick="closeModal('audioModal')">&times;</span>
            <h3>Enjoy the music 🎧</h3>
            <div id="iframeContainer"></div>
        </div>
    </div>
@endsection

{{-- @section('footer')
    @include('systemever/includes/footer')
@endsection --}}

@section('custom_js')
<script>
document.addEventListener('DOMContentLoaded', function () {
    window.CSRF_TOKEN = "{{ csrf_token() }}";
    const trackId = 2103475278;
    const formModal = document.getElementById('formModal');
    const audioModal = document.getElementById('audioModal');
    const iframeContainer = document.getElementById('iframeContainer');

    function openAudioModal() {
        iframeContainer.innerHTML = `
            <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay"
                src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/${trackId}&auto_play=true&color=%23ff5500&show_comments=true&visual=true">
            </iframe>`;
        audioModal.style.display = "block";
    }

    function closeModal(id) {
        document.getElementById(id).style.display = "none";
        if (id === 'audioModal') iframeContainer.innerHTML = "";
    }

    document.getElementById('openFormModal').addEventListener('click', function () {
        fetch(`/check-play?track_id=${trackId}`)
            .then(res => res.json())
            .then(data => {
                if (data.hasPlayed) {
                    // ✅ IP sudah pernah play → langsung tampilkan audio tanpa insert ulang
                    openAudioModal();
                } else {
                    // ❌ IP belum pernah play → tampilkan form
                    formModal.style.display = "block";
                }
            });
    });


    document.getElementById('playForm').addEventListener('submit', function (e) {
        e.preventDefault();
        const name = this.name.value;
        const email = this.email.value;

        fetch("/log-play", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({ name, email, track_id: trackId })
        })
        .then(res => res.json())
        .then(() => {
            formModal.style.display = "none";
            openAudioModal();
        });
    });

    window.onclick = function(event) {
        if (event.target === formModal) formModal.style.display = "none";
        if (event.target === audioModal) closeModal('audioModal');
    };
});
</script>
@endsection

