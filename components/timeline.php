<?php
$timeline_events = [
    [
        'date' => 'May 27 - 28',
        'description' => 'The first two days were primarily dedicated to organizational tasks. During this time, roles were assigned to ensure that each group member had a clear responsibility. These initial days were also utilized to begin drafting our summative documents and laying the groundwork for the final report.'
    ],
    [
        'date' => 'May 29 - June 4',
        'description' => 'After completing all preparatory and organizational tasks, our group promptly began working on our assigned responsibilities. Ye Gao, Richard, and Jia Xin efficiently initiated the 3D modelling of our product to ensure it would be ready for printing on time. In addition, Jia Xin worked silently in the background on the development of our website, while Richard and Ye Gao went above and beyond by dedicating their personal time, often working overtime, to ensure that our final product would meet the highest standards. As Ye Gao, Jia Xin and Richard are working on modelling our product, Vanessa worked in the background by quietly practicing her building and crafting skills as Ye Gao, voluntarily, printed what looked like a claw, which was assembled hastily by Vanessa.'
    ],
    [
        'date' => 'June 5 - June 6',
        'description' => 'The model was finally ready to be printed. Despite being short one person on Thursday, Jia Xin and Ye Gao wasted no time and immediately began assisting Vanessa with the build. Although Richard was absent, Vanessa continued working diligently on assembling our product. Meanwhile, Ye Gao and Richard focused on modeling the frame, and Jia Xin tirelessly worked on designing our website. Everyone remained committed to ensuring we met our goal of completing the product by Thursday of Week 3.'
    ]
];
?>

<div class="py-12 space-y-6">
    <div class="flex flex-col justify-center text-center">
        <div>
            <p class="py-10 mx-6 text-3xl uppercase retro">
                Project <span class="text-pink">Timeline</span>
            </p>
            <div class="mx-12 my-6">
                <div class="p-8 border-4 border-dashed border-pink">
                    <div class="space-y-8">
                        <?php foreach ($timeline_events as $event): ?>
                            <div class="p-6 text-xl leading-6 tracking-wide bg-pink neuebit">
                                <h3 class="text-2xl font-bold mb-4"><?php echo $event['date']; ?></h3>
                                <p class="text-lg text-left"><?php echo $event['description']; ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 