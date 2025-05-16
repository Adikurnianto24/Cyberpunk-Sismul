<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-4 mb-4">NETRUNNER PROFILE</h2>
            
            <div class="card mb-4" style="max-width: 540px; background-color: rgba(13, 2, 33, 0.8); border: 1px solid var(--neon-blue); box-shadow: 0 0 15px var(--neon-blue);">
                <div class="card-header" style="background-color: rgba(0, 255, 255, 0.1); border-bottom: 1px solid var(--neon-blue); display: flex; justify-content: space-between; align-items: center;">
                    <span style="color: var(--neon-blue); font-weight: bold; letter-spacing: 1px;">PROFILE ID: <?= $mahasiswa['npm'] ?></span>
                    <span style="color: var(--neon-green); font-size: 0.8rem;">SECURITY LEVEL 4</span>
                </div>
                
                <div class="row g-0">
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="mb-3 pb-2" style="border-bottom: 1px solid rgba(255, 0, 255, 0.3);">
                                <h5 style="color: var(--neon-pink);">HANDLE</h5>
                                <p style="color: white; font-family: 'Orbitron', sans-serif;"><?= $mahasiswa['nama'] ?></p>
                            </div>
                            
                            <div class="mb-3 pb-2" style="border-bottom: 1px solid rgba(255, 0, 255, 0.3);">
                                <h5 style="color: var(--neon-pink);">CODE</h5>
                                <p style="color: var(--neon-green); font-family: 'Courier New', monospace;"><?= $mahasiswa['npm'] ?></p>
                            </div>
                            
                            <div class="mb-3 pb-2" style="border-bottom: 1px solid rgba(255, 0, 255, 0.3);">
                                <h5 style="color: var(--neon-pink);">BIRTH DATE</h5>
                                <p style="color: white;"><?= $mahasiswa['tgl_lahir'] ?></p>
                            </div>
                            
                            <div class="mb-4">
                                <h5 style="color: var(--neon-pink);">LOCATION</h5>
                                <p style="color: white; background-color: rgba(0, 255, 255, 0.1); padding: 8px; border-left: 3px solid var(--neon-blue);"><?= $mahasiswa['alamat'] ?></p>
                            </div>

                            <div class="d-flex gap-2 mb-4">
                                <a href="/mahasiswa/edit/<?= $mahasiswa['slug']; ?>" class="btn" style="background-color: rgba(255, 255, 0, 0.2); border: 1px solid var(--neon-yellow); color: var(--neon-yellow); box-shadow: 0 0 5px var(--neon-yellow);">MODIFY</a>

                                <form action="/mahasiswa/<?= $mahasiswa['id']; ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn" style="background-color: rgba(255, 0, 0, 0.2); border: 1px solid #ff3547; color: #ff3547; box-shadow: 0 0 5px #ff3547;">PURGE</button>
                                </form>
                            </div>
                            
                            <a href="/mahasiswa" style="color: var(--neon-blue); text-decoration: none; display: inline-block; border-bottom: 1px dashed var(--neon-blue);">« BACK TO DATABASE</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="p-3 mt-2" style="background-color: rgba(255, 0, 255, 0.1); border-left: 3px solid var(--neon-pink); max-width: 540px;">
                <p style="margin: 0; color: var(--neon-pink); font-size: 0.85rem;">
                    <small>⚠ ACCESSING RESTRICTED DATA - ALL ACTIVITIES LOGGED</small>
                </p>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>