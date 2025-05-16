<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mb-4 text-center">NETRUNNER DATABASE</h1>
                
                <a href="/mahasiswa/create" class="btn mt-3 mb-4" style="background-color: var(--neon-green); color: var(--dark-bg); font-weight: bold; border: none; box-shadow: 0 0 10px var(--neon-green); text-transform: uppercase; letter-spacing: 1px;">Add New Netrunner</a>
                
                <div class="table-responsive" style="border: 1px solid var(--neon-blue); border-radius: 5px; box-shadow: 0 0 15px var(--neon-blue);">
                    <table class="table table-dark" style="margin-bottom: 0; background: linear-gradient(to right, rgba(13, 2, 33, 0.9), rgba(18, 2, 61, 0.9));">
                        <thead>
                            <tr style="border-bottom: 2px solid var(--neon-pink);">
                                <th scope="col" style="color: var(--neon-yellow);">ID</th>
                                <th scope="col" style="color: var(--neon-yellow);">HANDLE</th>
                                <th scope="col" style="color: var(--neon-yellow);">CODE</th>
                                <th scope="col" style="color: var(--neon-yellow);">LOCATION</th>
                                <th scope="col" style="color: var(--neon-yellow);">BIRTH</th>
                                <th scope="col" style="color: var(--neon-yellow);">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach($mahasiswa as $m) : ?>
                            <tr style="border-bottom: 1px solid rgba(0, 255, 255, 0.2);">
                                <th scope="row" style="color: var(--neon-blue);"><?= $i++; ?></th>
                                <td style="color: white;"><?= $m['nama']; ?></td>
                                <td style="color: var(--neon-green);"><?= $m['npm']; ?></td>
                                <td style="color: white;"><?= $m['alamat']; ?></td>
                                <td style="color: white;"><?= $m['tgl_lahir']; ?></td>
                                <td>
                                    <a href="/mahasiswa/<?= $m['slug']; ?>" class="btn btn-sm" style="background-color: transparent; border: 1px solid var(--neon-pink); color: var(--neon-pink); box-shadow: 0 0 5px var(--neon-pink);">ACCESS FILE</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                
                <div class="mt-4 p-3" style="border-left: 3px solid var(--neon-green); background-color: rgba(0, 255, 159, 0.1);">
                    <p style="margin: 0; color: var(--neon-green);">
                        <small>⚠ CLASSIFIED DATA • SECURITY LEVEL 4 • AUTHORIZED PERSONNEL ONLY</small>
                    </p>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>