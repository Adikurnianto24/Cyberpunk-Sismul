<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<link rel="stylesheet" href="/css/styleHome.css">
<div class="container">
    <div class="row">
        <div class="col">
            <h1>CYBERPUNK 2077</h1>
            <?php if (session()->get('member_id')) : ?>
                <h2>Welcome to Night City, <?php echo (session()->get('member_username')); ?></h2>
            <?php else : ?>
                <h2>Welcome to Night City</h2>
            <?php endif; ?>
            <h2>
                <marquee behavior="" direction="">
                    <font color="#00ff9f">Muhammad Adi Kurnianto - ENVORER</font>
                </marquee>
            </h2>
            <h2>Enjoy the Cyberpunk music</h2>
            <div class="audio-container" style="margin-bottom: 30px; padding: 15px; border: 2px solid #ff00ff; border-radius: 10px; background-color: rgba(15, 15, 40, 0.8); box-shadow: 0 0 15px #ff00ff; position: relative;">
                <div class="audio-label" style="position: absolute; top: -12px; left: 20px; background-color: #0d0221; padding: 0 10px; color: #ff00ff; font-family: 'Orbitron', sans-serif; font-size: 14px;">NIGHT CITY RADIO</div>
                <div style="background: linear-gradient(45deg, #1e0033, #350035); padding: 8px; border-radius: 8px; border: 1px solid #ff00ff;">
                    <audio controls style="width: 100%; height: 40px; background-color: #00ffff;">
                        <source src="/mp3/garamcina.mp3" type="audio/mpeg">
                    </audio>
                </div>
                <div style="margin-top: 8px; text-align: center; color: #ff00ff; font-size: 12px; font-family: 'Orbitron', sans-serif; text-shadow: 0 0 5px #ff00ff;">
                    NOW PLAYING: GARAM CINA REMIX • CYBERPUNK EDITION
                </div>
            </div>
            <h2>
                <font color="#00ffff">Cybernetic Enhancements</font>
            </h2>
            <p>Cybernetic implants are artificial devices or systems that interface with the human body, typically the nervous system, to enhance or replace biological functions. In the cyberpunk world of 2077, these enhancements range from simple physical augmentations to complex neural interfaces that allow direct brain-computer connectivity.</p>

        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="">
                <img src="/img/cyberpunk_city.jpg?v=<?= time() ?>" alt="Cyberpunk 2077 city" id="imgHomeM">
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <h2>
                <font color="#ff00ff">Neural Implants</font>
            </h2>
            <p>Neural implants represent the pinnacle of cybernetic technology, allowing direct interface between the human brain and computers. These range from simple memory enhancement chips to full neural-interface systems that allow users to access the Net directly with their minds, control cybernetic limbs with thought alone, or even run combat software that enhances reflexes and tactical awareness.</p>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="">
                <img src="/img/cyberpunk_character.jpg?nocache=<?= rand(1000, 9999) ?>" alt="Cyberpunk character" id="imgHomeM">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="colVid">
            <h2 class="mt-5">Cyberpunk Technology Demo</h2>
            <div class="video-container" style="margin-bottom: 30px; padding: 15px; border: 2px solid #00ffff; border-radius: 10px; background-color: rgba(15, 15, 40, 0.8); box-shadow: 0 0 15px #00ffff;">
                <div style="background: linear-gradient(45deg, #002e33, #002835); padding: 8px; border-radius: 8px; border: 1px solid #00ffff;">
                    <video class="videoPlayer" controls style="width: 100%; border-radius: 5px; filter: contrast(1.2) brightness(1.2);">
                        <source src="/img/cyberpunk.mp4?v=<?= time() ?>" type="video/mp4">
                    </video>
                </div>
                <div class="video-info" style="margin-top: 10px; color: #00ffff; font-family: 'Orbitron', sans-serif; font-size: 12px; text-align: right; text-shadow: 0 0 5px #00ffff;">
                    <span>CYBERWARE DEMONSTRATION • SECURITY LEVEL 3 • NIGHT CITY ARCHIVES</span>
                </div>
            </div>
        </div>
    </div>
</div>



<footer class="footer text-white" id="footerHome">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center">
                <h5>ABOUT CYBERPUNK</h5>
                <p>
                    A dystopian future where technology meets anarchy
                </p>
            </div>
            <div class="col-lg-6 mb-3 text-center">
                <h5>LOCATION</h5>
                <p>
                    Night City, 2077
                </p>
            </div>
            <h5 class="text-center mb-5">
                CYBERPUNK LIFE
            </h5>
        </div>

    </div>
</footer>

<?= $this->endSection(); ?>