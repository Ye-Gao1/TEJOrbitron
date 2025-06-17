<?php
$team_members = [
    [
        'name' => 'Ye Gao',
        'role' => 'Designer of the website, mostly focus on helping Richard in the beginning with printing, built this website in a rush not my best work.',
        'image' => '../images/team/Ye.png'
    ],
    [
        'name' => 'Jia Xin Li',
        'role' => 'Energizes the project—literally. With a sharp grasp of circuits and systems, she powers Orbitron\'s functionality and resilience.',
        'image' => '../images/team/Jay.png'
    ],
    [
        'name' => 'Vanessa Ting',
        'role' => 'Focuses on software development, specializing in integrating wireless chips and ensuring seamless communication between Orbitron\'s components.',
        'image' => '../images/team/Vanessa.png'
    ],
    [
        'name' => 'Richard Xu',
        'role' => 'The hands-on architect of the team, transforming ideas into reality with precision engineering and a builder\'s instinct for problem-solving.',
        'image' => '../images/team/Richard.png'
    ],
    [
        'name' => 'Allen Zheng',
        'role' => 'Captures the journey—documenting every breakthrough and setback through detailed records and powerful visuals that bring our innovation to life.',
        'image' => '../images/team/Allen.png'
    ]
];
?>

<div class="py-12 space-y-6">
    <div class="flex flex-col justify-center text-center">
        <div>
            <p class="py-10 mx-6 text-3xl uppercase retro">
                Meet Our <span class="text-pink">Team</span>
            </p>
            <div class="mx-12 my-6">
                <div class="p-8 border-4 border-dashed border-pink">
                    <p class="mb-12 text-2xl neuebit">
                        We are a team of forward-thinking engineers, designers, and visionaries passionate about blending nature’s brilliance with modern robotics. Inspired by the agility and adaptability of spiders, our soft-jointed Orbitron is engineered to navigate where conventional machines cannot. Whether it's transporting materials across hazardous work sites, retrieving individuals from disaster zones, or exploring treacherous, uncharted landscapes, Orbitron is designed to serve with precision, care, and resilience. Sustainability is at our core—we champion efficient, eco-conscious production methods to shape a safer, more accessible world for all.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <?php foreach ($team_members as $member): ?>
                            <div class="p-4 text-xl leading-6 tracking-wide bg-pink neuebit">
                                <div class="flex justify-center mb-4">
                                    <div class="w-32 h-32 rounded-full border-4 border-white overflow-hidden">
                                        <img src="<?php echo $member['image']; ?>" alt="<?php echo $member['name']; ?>" class="w-full h-full object-cover">
                                    </div>
                                </div>
                                <h3 class="text-2xl font-bold mb-4"><?php echo $member['name']; ?></h3>
                                <p class="text-lg"><?php echo $member['role']; ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>