<?php
$quotes = [
    'The best and most beautiul things in the world cannot be seen or even touched - they must be felt with the heart. -Helen Keller',
    'The best preparation for tomorrow is doing your best today. -H. Jackson Brown, Jr.',
    'Health is the greatest gift, contentment the greatest wealth, faithfulness the best relationship. -Buddha',
    'Good, better, best. Never let it rest. "Til your good is better and your better is best. -St. Jerome',
    'Always do your best.  What you plant now, you will harvest later. -Og Mandino',
    'The best thing to hold onto in lie is each other. -Audrey Hepburn',
    'An investment in knowledge pauys the best interest. -Benjamin Franklin',
    'The best way to find yourself is to lose yourself in the service of others. -Mahatma Gandhi',
    'The best way to pay for a lovely moment is to enjoy it. -Richard Bach',
    'A satisfied customer is the best business strategy of all. -Michael LeBoef',
    'The best way to find out if you can trust somebody is to trust them. -Ernest Hemingway',
    'The best way to predict the future is to create it. -Peter Drucker',
    'A leader is best when people barely know he exists, when his work is done, his aim fulfilled, they will say: we did it ourselves. -Lao Tzu',
    'Our prayers should be for blessings in general, for God knows best what is good for us. -Socrates',
    'The best advice I ever got was that knowledge is power and to keep reading. -David Bailey'
];

$rand_quote = array_rand($quotes, 1);
echo $quotes[$rand_quote]."\n";
?>
