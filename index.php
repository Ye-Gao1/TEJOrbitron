<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORBITRON</title>
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
</head>
<body>
    <div>
        <?php include 'components/hero.php'; ?>
        <?php include 'components/navbar.php'; ?>

        <div class="relative">
            <div class="absolute top-0 left-0 right-0 pointer-events-none -bottom-4 grainy-bg"></div>
            <div class="absolute top-0 left-0 right-0 -bottom-4 -z-10 bg-dark"></div>

            <?php include 'components/about.php'; ?>
            <?php include 'components/proposal.php'; ?>
            <?php include 'components/team.php'; ?>
            <?php include 'components/timeline.php'; ?>
            <?php include 'components/gallery.php'; ?>

        </div>

        <?php include 'components/footer.php'; ?>

        <svg width="0" height="0" class="block">
            <filter id="grainy" x="0" y="0" width="100%" height="100%">
                <feTurbulence type="fractalNoise" baseFrequency=".5" />
                <feColorMatrix type="saturate" values="0" />
                <feBlend in="SourceGraphic" mode="multiply" />
            </filter>
        </svg>

        <div id="audio-control" class="fixed bottom-3 right-3" style="z-index: 999;">
            <div class="flex items-center justify-center border-2 rounded-full bg-darker border-pink size-12" onclick="toggleMute()">
                <svg id="audio-icon-unmuted" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6" style="display: none;">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.114 5.636a9 9 0 0 1 0 12.728M16.463 8.288a5.25 5.25 0 0 1 0 7.424M6.75 8.25l4.72-4.72a.75.75 0 0 1 1.28.53v15.88a.75.75 0 0 1-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.009 9.009 0 0 1 2.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75Z" />
                </svg>
                <svg id="audio-icon-muted" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 9.75 19.5 12m0 0 2.25 2.25M19.5 12l2.25-2.25M19.5 12l-2.25 2.25m-10.5-6 4.72-4.72a.75.75 0 0 1 1.28.53v15.88a.75.75 0 0 1-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.009 9.009 0 0 1 2.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75Z" />
                </svg>
            </div>
        </div>
        <audio id="background-music" loop>
            <source src="./music/music.mp3" type="audio/mp3">
        </audio>
    </div>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tsparticles/confetti@3.0.3/tsparticles.confetti.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html> 