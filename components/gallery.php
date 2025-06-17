<?php
function gallery($currentIndex = 0) {
    $galleryPath = 'images/gallery/';
    $filePaths = [];
    
    $maxImageNumber = 32;
    for ($i = 1; $i <= $maxImageNumber; $i++) {
        $filePath = $galleryPath . $i . '.jpg';

        $filePaths[] = $filePath;
    }

    $totalImages = count($filePaths);
    $currentIndex = max(0, min($currentIndex, $totalImages - 1));
    
    $prevIndex = ($currentIndex - 1 + $totalImages) % $totalImages;
    $nextIndex = ($currentIndex + 1) % $totalImages;

    function renderFile($file) {
        $fileExtension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        
        if (in_array($fileExtension, ['jpg', 'jpeg', 'png', 'gif'])) {
            return '<img src="' . htmlspecialchars($file) . '" alt="Gallery Item" class="object-cover w-full h-full" />';
        } elseif (in_array($fileExtension, ['mp4', 'mov'])) {
            return '<video controls autoplay muted class="object-cover w-full h-full">
                        <source src="' . htmlspecialchars($file) . '" type="video/' . $fileExtension . '" />
                        Your browser does not support the video tag.
                    </video>';
        } else {
            return '<div>Unsupported file format: ' . htmlspecialchars($fileExtension) . '</div>';
        }
    }

    function imageCard($file, $size = 'medium', $additionalClasses = '') {
        $sizeClasses = [
            'small' => 'lg:w-[300px] lg:h-[200px]',
            'medium' => 'lg:w-[600px] lg:h-[400px]',
            'large' => 'lg:w-[800px] lg:h-[500px]'
        ];

        $sizeClass = isset($sizeClasses[$size]) ? $sizeClasses[$size] : $sizeClasses['medium'];

        return '<div class="bg-pink bg-cover bg-center transition-all duration-300 ease-in-out ' . $sizeClass . ' ' . $additionalClasses . '">
                    <div class="h-full p-3">
                        <div class="flex flex-col justify-center h-full p-2 bg-black/40">
                            ' . renderFile($file) . '
                        </div>
                    </div>
                </div>';
    }

    ob_start();
    ?>
    
    <div class="flex flex-col items-center justify-center min-h-screen p-5 inter bg-black">
        <div class="flex items-center justify-center space-x-4">
            <a href="?index=<?php echo $prevIndex; ?>" class="cursor-pointer">
                <?php echo imageCard($filePaths[$prevIndex], 'small', 'opacity-50 hover:opacity-75'); ?>
            </a>
            <?php echo imageCard($filePaths[$currentIndex], 'large', 'border-4 border-white'); ?>
            <a href="?index=<?php echo $nextIndex; ?>" class="cursor-pointer">
                <?php echo imageCard($filePaths[$nextIndex], 'small', 'opacity-50 hover:opacity-75'); ?>
            </a>
        </div>
        
        <div class="flex mt-4 space-x-2">
            <?php for ($i = 0; $i < $totalImages; $i++): ?>
                <a href="?index=<?php echo $i; ?>" 
                   class="w-3 h-3 rounded-full transition-all duration-300 block <?php echo ($i === $currentIndex) ? 'bg-white scale-125' : 'bg-gray-500 hover:bg-gray-300'; ?>">
                </a>
            <?php endfor; ?>
        </div>
        
        <div class="mt-4 text-white retro">
            File <?php echo $currentIndex + 1; ?> of <?php echo $totalImages; ?>
        </div>
        
        <div class="flex mt-4 space-x-4">
            <a href="?index=<?php echo $prevIndex; ?>" class="text-white hover:text-gray-300 text-2xl">
                ← Previous
            </a>
            <a href="?index=<?php echo $nextIndex; ?>" class="text-white hover:text-gray-300 text-2xl">
                Next →
            </a>
        </div>
    </div>

    <?php
    return ob_get_clean();
}

$currentIndex = isset($_GET['index']) ? (int)$_GET['index'] : 0;
echo gallery($currentIndex);
?>
