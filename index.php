


<?php
$tab = [
"Pommes",
"Poires",
"Oranges",
"Légumes",
"Haricots verts",
"Tomates",
"Autres",
"Gâteaux",
"Bonbons",
"Savon",

];



foreach ($tab as $i => $value) {
echo "<li>$tab[$i]</li>";
echo "<br>";
}

$tab2 = [
"Fruits : " => ["Pommes","Poires","Oranges"],
"Légumes : " => ["Haricots verts","Tomates"],
"Autres : " => ["Gâteaux","Bonbons","Savon"]
];
foreach ($tab2 as $i => $value) {
echo "<h2>$i</h2>";


foreach($value as $item) {
    echo "<p> $item </p>";
    
}
}
?>
