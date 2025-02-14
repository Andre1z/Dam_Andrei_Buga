<?php
session_start();

// Hardcoded credentials
define('USERNAME', 'andrei');
define('PASSWORD', 'andrei');

// Handle logout
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// Handle login
if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] === USERNAME && $_POST['password'] === PASSWORD) {
        $_SESSION['logged_in'] = true;
    } else {
        $login_error = "Usuario o contraseña inválidos.";
    }
}

/**
 * Get the subfolders inside the "imagenes" folder
 *
 * @param string $directory
 * @return array
 */
function getSubfolders($directory) {
    $subfolders = [];
    if (is_dir($directory)) {
        $dirs = scandir($directory);
        foreach ($dirs as $dir) {
            if ($dir !== '.' && $dir !== '..') {
                $fullPath = $directory . DIRECTORY_SEPARATOR . $dir;
                if (is_dir($fullPath)) {
                    $subfolders[] = $dir;
                }
            }
        }
    }
    return $subfolders;
}

/**
 * Get image files from a specific subfolder
 *
 * @param string $directory
 * @return array
 */
function getImages($directory) {
    $images = [];
    if (is_dir($directory)) {
        $files = scandir($directory);
        foreach ($files as $file) {
            if ($file !== '.' && $file !== '..') {
                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                // You can add more extensions if needed
                if (in_array($ext, ['png', 'jpg', 'jpeg', 'gif', 'webp'])) {
                    $images[] = $file;
                }
            }
        }
    }
    return $images;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>andrei | thistle</title>
    <link rel="icon" type="image/svg+xml" href="https://jocarsa.com/static/logo/thistle.png" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap');

body {
    margin: 0;
    font-family: 'Inter', Arial, sans-serif;
    background: #1e1e2e; /* Dark background */
    color: #fff;
}

/* HEADER */
header {
    background: linear-gradient(135deg, #7f5af0, #9370db);
    color: white;
    padding: 1.2rem;
    text-align: center;
    font-size: 1.5rem;
    font-weight: bold;
}

/* NAVIGATION */
nav {
    background: #282843;
    color: white;
    padding: 1rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
}

nav h1 {
    display: flex;
    align-items: center;
    font-size: 1.3rem;
    margin: 0;
}

nav h1 img {
    width: 50px;
    margin-right: 10px;
}

nav a, nav span {
    color: white;
    text-decoration: none;
    font-weight: bold;
    font-size: 1rem;
}

nav a:hover {
    color: #7f5af0;
}

/* LOGIN FORM */
.login-container {
    max-width: 350px;
    margin: 120px auto;
    background: #2c2c54;
    border-radius: 8px;
    padding: 20px;
    text-align: center;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
}

.login-container h2 {
    margin: 0 0 1rem;
    color: #7f5af0;
}

.login-container img {
    width: 80px;
    margin-bottom: 15px;
}

.login-container input {
    display: block;
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
    border: none;
    outline: none;
    font-size: 1rem;
    background: #3a3a61;
    color: white;
}

.login-container input::placeholder {
    color: #bbb;
}

.login-container input[type="submit"] {
    background: #7f5af0;
    cursor: pointer;
    font-weight: bold;
    transition: 0.3s;
}

.login-container input[type="submit"]:hover {
    background: #5a3ebf;
}

.login-error {
    color: red;
    margin-bottom: 1rem;
    font-size: 0.9rem;
}

/* MAIN CONTENT */
.main-container {
    display: flex;
    min-height: calc(100vh - 100px);
}

/* LEFT PANE - SIDEBAR */
.left-pane {
    width: 250px;
    background: #282843;
    padding: 1rem;
    min-height: 100vh;
    box-shadow: 4px 0px 10px rgba(0, 0, 0, 0.3);
}

.left-pane h3 {
    color: #7f5af0;
    font-size: 1.2rem;
    text-transform: uppercase;
    margin-bottom: 1rem;
}

.folder-list {
    list-style: none;
    padding: 0;
}

.folder-list li {
    padding: 12px;
    border-radius: 5px;
    transition: background 0.3s;
}

.folder-list a {
    text-decoration: none;
    color: #ddd;
    font-size: 1rem;
}

.folder-list li:hover {
    background: #3a3a61;
}

.selected {
    background: #7f5af0;
}

.selected a {
    color: white;
}

/* RIGHT PANE */
.right-pane {
    flex-grow: 1;
    padding: 2rem;
}

/* IMAGE GRID */
.grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 1rem;
    margin-top: 1rem;
}

.grid-container img {
    width: 100%;
    border-radius: 8px;
    transition: transform 0.3s, box-shadow 0.3s;
}

.grid-container img:hover {
    transform: scale(1.05);
    box-shadow: 0px 4px 15px rgba(255, 255, 255, 0.2);
}

/* MODAL */
.modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 9999;
}

.modal-content {
    position: relative;
    max-width: 90%;
    max-height: 90%;
    background: #fff;
    border-radius: 8px;
    padding: 1rem;
    box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.4);
}

.modal-content img {
    max-width: 100%;
    max-height: 80vh;
    border-radius: 8px;
}

.close-btn {
    position: absolute;
    top: -10px;
    right: -10px;
    background: #7f5af0;
    color: white;
    border: none;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    cursor: pointer;
    font-weight: bold;
    transition: 0.3s;
}

.close-btn:hover {
    background: #5a3ebf;
}

/* RESPONSIVE DESIGN */
@media (max-width: 768px) {
    .main-container {
        flex-direction: column;
    }
    .left-pane {
        width: 100%;
        text-align: center;
        padding: 1rem 0;
    }
    .folder-list {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }
    .folder-list li {
        margin: 5px;
    }
    .right-pane {
        width: 100%;
    }
}

    </style>
    <script>
        function openModal(imgSrc) {
            var modalOverlay = document.getElementById('modalOverlay');
            var modalImage = document.getElementById('modalImage');
            modalImage.src = imgSrc;
            modalOverlay.style.display = 'flex';
        }
        function closeModal() {
            var modalOverlay = document.getElementById('modalOverlay');
            var modalImage = document.getElementById('modalImage');
            modalImage.src = '';
            modalOverlay.style.display = 'none';
        }
       
    </script>
</head>
<body>

<?php if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true): ?>
    <!-- LOGIN FORM -->
    <div class="login-container">
        <h2>andrei | thistle</h2>
        <?php if (isset($login_error)): ?>
            <div class="login-error"><?php echo $login_error; ?></div>
        <?php endif; ?>
        <form method="post" action="">
        <img src="https://jocarsa.com/static/logo/thistle.png">
            <input type="text" name="username" placeholder="Usuario" required />
            <input type="password" name="password" placeholder="Contraseña" required />
            <input type="submit" value="Entrar" />
        </form>
    </div>
<?php else: ?>
    <!-- HEADER -->
   

    <!-- NAVIGATION -->
    <nav>
    <h1>
                <img src="https://jocarsa.com/static/logo/thistle.png" alt="Logo">andrei | thistle
            </h1>
        <span>Usuario: <?php echo USERNAME; ?></span>
        <a href="?action=logout">Cerrar Sesión</a>
    </nav>

    <!-- MAIN CONTENT: TWO-PANE LAYOUT -->
    <div class="main-container">
        <!-- LEFT PANE: List of subfolders -->
        <div class="left-pane">
            <h3>VirtualHosts</h3>
            <ul class="folder-list">
                <?php
                $subfolders = getSubfolders('imagenes');
                $currentSubfolder = isset($_GET['subfolder']) ? $_GET['subfolder'] : '';
                foreach ($subfolders as $sf):
                    $selectedClass = ($sf === $currentSubfolder) ? 'selected' : '';
                    // Build the URL with the subfolder param
                    $url = $_SERVER['PHP_SELF'] . '?subfolder=' . urlencode($sf);
                    echo "<li class=\"$selectedClass\" ><a href=\"$url\">$sf</a></li>";
                endforeach;
                ?>
            </ul>
        </div>
        
        <!-- RIGHT PANE: Images -->
        <div class="right-pane">
            <?php if ($currentSubfolder): ?>
                <?php
                $images = getImages('imagenes' . DIRECTORY_SEPARATOR . $currentSubfolder);
                if (count($images) > 0):
                ?>
                    <div class="grid-container">
                        <?php foreach ($images as $img): ?>
                            <?php $imgPath = 'imagenes/' . $currentSubfolder . '/' . $img; ?>
                            <img 
                                src="<?php echo $imgPath; ?>" 
                                alt="<?php echo $img; ?>" 
                                onclick="openModal('<?php echo $imgPath; ?>')" />
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    <p>No se encontraron imágenes en la carpeta <strong><?php echo htmlspecialchars($currentSubfolder); ?></strong>.</p>
                <?php endif; ?>
            <?php else: ?>
                <p>Por favor, selecciona un VirtualHost de la lista para ver sus imágenes.</p>
            <?php endif; ?>
        </div>
    </div>

    <!-- MODAL OVERLAY -->
    <div class="modal-overlay" id="modalOverlay" onclick="closeModal()">
        <div class="modal-content" onclick="event.stopPropagation()">
            <button class="close-btn" onclick="closeModal()">×</button>
            <img id="modalImage" src="" alt="Imagen grande" />
        </div>
    </div>

<?php endif; ?>

</body>
</html>
