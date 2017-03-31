<?php
$json = '[
  {
    "Name": "LCD",
    "Desc": "Sony",
    "Qty": "10",
	"Price": "2000",
	"Calculate": ""
  },
  {
    "Name": "Keyboard",
    "Desc": "Dell",
    "Qty": "5",
	"Price": "500",
	"Calculate": ""
  },
  {
    "Name": "Mouse",
    "Desc": "a4Tech",
    "Qty": "3",
	"Price": "300",
	"Calculate": ""
  },
  {
    "Name": "USB",
    "Desc": "Kingstton",
    "Qty": "15",
	"Price": "700",
	"Calculate": ""
  },
  {
    "Name": "HeadPhone",
    "Desc": "Kingstton",
    "Qty": "7",
	"Price": "3000",
	"Calculate": ""
  }
]';

$data = json_decode($json);
$items = count($data);
echo "<table><tr><td>Name</td><td>Desc</td><td>Qty</td><td>Price</td><td>Calculate</td></tr>";
	for ($i = 0; $i <= $items-1; $i++) {
		$Name = $data[$i]->Name;
		$Desc = $data[$i]->Desc;
		$Qty = $data[$i]->Qty;
		$Price = $data[$i]->Price;
		$Calculate = $Qty*$Price;
		$Sum = $Sum+$Calculate;
echo "<tr><td>".$Name."</td><td>".$Desc."</td><td>".$Qty."</td><td>".$Price."</td><td>".$Calculate."</td></tr>";
	}
echo "<tr><td></td><td></td><td></td><td>Summ:</td><td>".$Sum."</td></tr></table>";
?>
