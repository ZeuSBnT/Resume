<?php

// Helper function to prevent XSS and keep HTML templates clean
function e(string $text): string {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

// Structured Resume Data
$resume = [
    'profile' => [
        'name'     => 'ZEUS EDCENT A. BONTO',
        'title'    => 'Game Developer',
        'tools'    => ['Unity', 'Maya', 'Roblox Studio'],
        'phone'    => '+63 969 512 4461',
        'phoneRaw' => '+639695124461',
        'email'    => 'zeusbonto0929@gmail.com',
        'website'  => 'zeusbonto.infinityfreeapp.com',
        'about'    => 'I am a Technical Game Developer with extensive experience in gameplay scripting and interactive systems. Leveraging a strong programming background in C#, C++, and Lua to build cohesive, engaging worlds. Combines analytical problem-solving with creative vision to optimize performance and elevate player experiences.'
    ],

    'education' => [
        [
            'date'   => '2023 - Present',
            'school' => 'FEU Institute of Technology',
            'level'  => 'College',
            'degree' => 'BSIT Major in Animation and Game Development (BSITAGD)'
        ],
        [
            'date'   => '2021 - 2023',
            'school' => 'Sacred Heart College',
            'level'  => 'Senior High',
            'degree' => 'Science, Technology, Engineering, and Mathematics (STEM)'
        ]
    ],

    'experience' => [
        [
            'date'    => '2025 - Present',
            'org'     => 'Slimescape - Roblox',
            'project' => 'SOULKEEPER',
            'bullets' => [
                'Programmed a highly narrative-driven RPG using Lua, implementing complex attribute-driven skill mechanics, data stores, and state machines for world events.',
                'Scripting intricate NPC behaviors, memory-erasure mechanics, and dialogue systems to drive the game\'s core progression and story.'
            ]
        ],
        [
            'date'    => '2025 - 2026',
            'org'     => 'Slimescape - Unity',
            'project' => 'Alerto Singko',
            'bullets' => [
                'Engineering a 3D typhoon-survival simulation game in Unity (C#), building state-driven preparation and storm phases, inventory capacity management, and star-rating evaluation systems.',
                'Scripting mobile-responsive controls, event-queued notification and voice systems, and interactive disaster-mitigation tasks to simulate real-world emergency decision-making.'
            ]
        ],
        [
            'date'    => '2024',
            'org'     => 'Slimescape - Roblox',
            'project' => 'Nine Men\'s Morris',
            'bullets' => [
                'Programmed a digital adaptation of the classic strategy board game from scratch.',
                'Designed an intuitive user interface to translate traditional board game physics into a seamless digital user experience.',
                'Optimized win/loss condition tracking and turn-based state management to eliminate bugs and ensure smooth multiplayer or AI synchronization.'
            ]
        ]
    ],

    'skills' => [
        '3D Modelling',
        'Animation',
        'C#, C++, Lua, JavaScript, Python',
        'HTML5, CSS3',
        'Gameplay Mechanics & Scripting',
        'System Architecture & Logic'
    ],

    'certifications' => [
        [
            'title'  => 'PMI Project Management Ready®',
            'issuer' => 'Project Management Institute',
            'date'   => '3/17/2026'
        ],
        [
            'title'  => 'Python',
            'issuer' => 'Information Technology Specialist',
            'date'   => '2/15/2025'
        ],
        [
            'title'  => 'Cisco Certified Support Technician Networking',
            'issuer' => 'Cisco Certified Support Technician',
            'date'   => '2/13/2026'
        ]
    ]
];