<?php

class HeroesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('heroes')->truncate();
        Hero::create([
        	'name' => 'Ember Spirit',
        	'alias' => 'Xin',
			'description' => "Lost within the Wailing Mountains, the Fortress of Flares lay abandoned, its training halls empty, its courtyard covered in leaves and dust. Upon a dais in its sealed temple rests a topaz cauldron filled with ancient ash, remnants of a pyre for the warrior-poet Xin. For three generations, Xin taught his acolytes the Bonds of the Guardian Flame, a series of mantras to train the mind and body for the harsh realities beyond the fortress walls. However, in teaching a warrior's way he earned a warrior's rivals, and in his autumn Xin was bested and slain. His followers spread to the wind. Yet as years turned to centuries and followers to descendants, his teachings endured by subtle whisper and deed. Touched by the teacher's lasting legacy, the Burning Celestial, inquisitive aspect of fire, cast himself to the Fortress of Flares and reignited the pyre ash. From these glowing embers emerged an image of Xin, wreathed in flame, his thoughtful countenance prepared to train and to teach, and to spread the fires of knowledge to all who seek guidance.",
			'image' => 'http://www.dotafire.com/images/hero/icon-sm/ember-spirit.png',
			'type' => 'agility',
			'attack_type' => 'melee',
			'strength' => '69',
			'agility' => '67',
			'intelligence' => '65',
			'health' => '1803',
			'mana' => '1079',
			'damage_max' => '56',
			'damage_min' => '52',
			'range' => '128',
			'armor' => '1.08',
			'movement' => '310',
        ]);
		Hero::create([
        	'name' => 'Soul Keeper',
        	'alias' => 'Terrorblade',
			'description' => "Terrorblade is the demon marauder--an outlaw hellion whom even other demons fear. A cosmic iconoclast, he stole from the Demon Lords, ignored the codified rites that should have bound his behavior, and broke every law of the seven Infernal Regions. For his crimes, he was taught this lesson: even Hell has a hell. A short, brutal trial ensued, with many dead on all sides, and he was finally incarcerated in Foulfell, a hidden dimension where demonkind imprison their own. But Foulfell is no normal prison. In this dark mirror of reality, demons are sentenced to gaze eternally into the twisted reflection of their own souls. But instead of suffering, Terrorblade made himself master of his own reflected worst self--a raging, thieving demon of unimaginable power. With his inner beast under sway, he destroyed the fractal prison walls and burst free to turn his terror loose upon all creation.",
			'image' => 'http://www.dotafire.com/images/hero/icon-sm/soul-keeper.png',
			'type' => 'agility',
			'attack_type' => 'melee',
			'strength' => '50',
			'agility' => '102',
			'intelligence' => '63',
			'health' => '1290',
			'mana' => '793',
			'damage_max' => '54',
			'damage_min' => '48',
			'range' => '128',
			'armor' => '5.22',
			'movement' => '315',
        ]);
		Hero::create([
        	'name' => 'Skywrath Mage',
        	'alias' => 'Dragonus',
			'description' => "A highly placed mage in the court of the Ghastly Eyrie, Dragonus lives a troubled existence. Sworn by birth to protect whoever sits within the Nest of Thorns, he hates the current Skywrath queen with all his soul. As a youth, high-born, he was a friend and companion to the eldest Skywrath princess, Shendelzare, first in line for the Nest. He had loved her warmly and unshakably, but as his studies took hold, his mind turned to arcane learning and the mastery of Skywrath sorcery. Obsessed with matters aetherial, he missed the mundane signs of courtly treachery that hinted at a plot against Shendelzare, and lost his chance to foil it. When the court was shaken by a swift and violent coup, he emerged from his studies to discover his oldest and dearest friend had been lost to him. The Nest of Thorns now belonged to Shendelzare's ruthless younger sister, and Dragonus could do nothing. The magic of the Skywrath Mage serves only the sworn protector of the Skywrath scion, so to act against the Nest would render him helpless. He clings to his post, believing it to be the best hope of one day restoring his true love to her rightful place. Meanwhile, his secret is known only to the goddess Scree'auk, whose magic it was transformed Shendelzare from a crippled physical creature into an embodiment of pure vengeful energy. While he dreams of restoring his beloved queen to the Ghastly Eyrie, he dreams even more desperately of restoring Shendelzare herself to a fully healed physical form. The duplicity of his role at court tortures him, for he is a noble and good-hearted creature; but the worst torture of all is imagining the hatred that Vengeful Spirit must hold in her heart for him.",
			'image' => 'http://www.dotafire.com/images/hero/icon-sm/skywrath-mage.png',
			'type' => 'intelligence',
			'attack_type' => 'ranged',
			'strength' => '57',
			'agility' => '38',
			'intelligence' => '117',
			'health' => '1575',
			'mana' => '1599',
			'damage_max' => '46',
			'damage_min' => '36',
			'range' => '600',
			'armor' => '0.52',
			'movement' => '325',
        ]);
		Hero::create([
        	'name' => 'Axe',
        	'alias' => 'Mogul Khan',
			'description' => "As a grunt in the Army of Red Mist, Mogul Khan set his sights on the rank of Red Mist General. In battle after battle he proved his worth through gory deed. His rise through the ranks was helped by the fact that he never hesitated to decapitate a superior. Through the seven year Campaign of the Thousand Tarns, he distinguished himself in glorious carnage, his star of fame shining ever brighter, while the number of comrades in arms steadily dwindled. On the night of ultimate victory, Axe declared himself the new Red Mist General, and took on the ultimate title of 'Axe.' But his troops now numbered zero. Of course, many had died in battle, but a significant number had also fallen to Axe's blade. Needless to say, most soldiers now shun his leadership. But this matters not a whit to Axe, who knows that a one-man army is by far the best.",
			'image' => 'http://www.dotafire.com/images/hero/icon-sm/axe.png',
			'type' => 'strength',
			'attack_type' => 'melee',
			'strength' => '88',
			'agility' => '75',
			'intelligence' => '58',
			'health' => '2145',
			'mana' => '988',
			'damage_max' => '53',
			'damage_min' => '49',
			'range' => '128',
			'armor' => '1.8',
			'movement' => '290',
        ]);
		Hero::create([
        	'name' => 'Tusk',
        	'alias' => 'Ymir',
			'description' => "It had been a brawl to remember. There stood Ymir, the Tusk, the Terror from the Barrier, the Snowball from Cobalt, the only fighter to have bested the Bristled Bruiser in a fair fight, and now the last man standing in Wolfsden Tavern. What started as a simple bar bet of supremacy ended with four regulars, a blacksmith, and six of the Frost Brigade's best soldiers writhing against the shards and splinters of almost every bottle, mug, and chair in the building. The Tusk boasted and toasted his victory as he emptied his brew. No sooner had the defeated regained consciousness than the cries for double-or-nothing rang out. The Tusk was pleased at the prospect, but none could think of a bet bigger than the one he just conquered. Horrified at the damage to his tavern and desperate to avoid another brawl, the barkeep had an idea. As skilled as he was, Ymir had never taken part in a real battle, never tested himself against the indiscriminate death and chaos of war. He proposed a wager to the fighter: seek out the biggest battle he could find, survive, and win it for whichever side he chose. The stakes? The next round of drinks.",
			'image' => 'http://www.dotafire.com/images/hero/icon-sm/tuskarr.png',
			'type' => 'strength',
			'attack_type' => 'melee',
			'strength' => '81',
			'agility' => '76',
			'intelligence' => '61',
			'health' => '2012',
			'mana' => '1014',
			'damage_max' => '54',
			'damage_min' => '50',
			'range' => '128',
			'armor' => '3.22',
			'movement' => '305',
        ]);
	}

}
