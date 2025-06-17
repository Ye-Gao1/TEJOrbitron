<?php
$menuItems = [
    ['name' => 'About', 'href' => './about.php'],
    ['name' => 'Team', 'href' => './team.php'],
    ['name' => 'Proposal', 'href' => './proposal.php'],
    ['name' => 'Timeline', 'href' => './timeline.php'],
    ['name' => 'Gallery', 'href' => './gallery.php']
];
?>

<nav class="w-full z-50 transition-all duration-300 relative bg-transparent">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex-shrink-0">
                <a href="./">
                    <span class="text-pink retro text-xl font-bold tracking-wider">
                        ORBITRON
                    </span>
                </a>
            </div>

            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-8">
                    <?php foreach ($menuItems as $item): ?>
                        <a href="<?php echo $item['href']; ?>" 
                           class="text-[#CFD8ED] hover:text-pink transition-colors duration-200 retro text-sm tracking-wide uppercase relative group">
                            <?php echo $item['name']; ?>
                            <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-pink transition-all duration-300 group-hover:w-full"></span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <button class="md:hidden relative w-8 h-8 focus:outline-none hamburger-button" onclick="toggleMenu()">
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    <span class="block w-6 h-0.5 bg-pink transition-all duration-300 -translate-y-1.5"></span>
                    <span class="block w-6 h-0.5 bg-pink transition-all duration-300 opacity-100"></span>
                    <span class="block w-6 h-0.5 bg-pink transition-all duration-300 translate-y-1.5"></span>
                </div>
            </button>
        </div>
    </div>

    <div class="md:hidden fixed inset-0 bg-darker/95 backdrop-blur-md transition-all duration-300 opacity-0 pointer-events-none mobile-menu">
        <div class="flex flex-col items-center justify-center h-full space-y-8">
            <?php foreach ($menuItems as $index => $item): ?>
                <a href="<?php echo $item['href']; ?>"
                   onclick="toggleMenu()"
                   class="text-[#CFD8ED] hover:text-pink transition-all duration-300 retro text-2xl tracking-wider uppercase transform translate-y-4 opacity-0"
                   style="transition-delay: <?php echo $index * 100; ?>ms">
                    <?php echo $item['name']; ?>
                </a>
            <?php endforeach; ?>
            
            <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-pink opacity-50 animate-pulse"></div>
            <div class="absolute bottom-1/4 right-1/4 w-2 h-2 bg-pink opacity-30 animate-pulse delay-500"></div>
            <div class="absolute top-1/3 right-1/3 w-1 h-1 bg-[#CFD8ED] opacity-40 animate-pulse delay-1000"></div>
        </div>
    </div>
</nav>

<div class="h-16 sticky-spacer" style="display: none;"></div> 