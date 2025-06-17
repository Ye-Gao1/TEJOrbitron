<?php
$steps = [
    [
        'img' => '/photos/3.png',
        'text' => 'Sign up for a ORBITRON Event in your city'
    ],
    [
        'img' => '/photos/4.png',
        'text' => 'Find a team of other teenagers at ORBITRON'
    ],
    [
        'img' => '/photos/5.png',
        'text' => 'Start building your game (no experience needed)'
    ],
    [
        'img' => '/photos/6.png',
        'text' => 'Attend workshops, or talk to one of our mentors for help'
    ],
    [
        'img' => '/photos/7.png',
        'text' => 'Ship what you made and share it with the rest of the world!'
    ]
];
?>

<div class="py-12 space-y-6">
    <div class="flex flex-col justify-center text-center">
        <div>
            <p class="py-10 mx-6 text-3xl uppercase retro">
                How does a <span class="text-pink">game jam</span> work?
            </p>
            <div class="flex justify-center mx-12 my-6">
                <div class="flex flex-wrap items-center justify-center gap-6 p-8 border-4 border-dashed border-pink inter">
                    <?php foreach ($steps as $step): ?>
                        <div class="p-4 text-xl leading-6 tracking-wide bg-pink neuebit">
                            <div class="justify-center items-center flex flex-col w-[200px]">
                                <img src="<?php echo $step['img']; ?>"
                                     alt="Steps"
                                     class="flex flex-col items-center justify-center overflow-hidden" />
                            </div>
                            <p class="h-24 px-2 flex items-center w-[200px]">
                                <?php echo $step['text']; ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div> 