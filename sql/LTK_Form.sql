-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 22, 2021 at 08:46 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `LTK_Form`
--

-- --------------------------------------------------------

--
-- Table structure for table `corrective_maintenance`
--

CREATE TABLE `corrective_maintenance` (
  `id` int(30) NOT NULL,
  `Problem` text DEFAULT NULL,
  `Corrective` text DEFAULT NULL,
  `Summary` text DEFAULT NULL,
  `RegDate` date DEFAULT current_timestamp(),
  `Images1` varchar(150) DEFAULT NULL,
  `Images2` varchar(150) DEFAULT NULL,
  `Username` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `corrective_maintenance`
--

INSERT INTO `corrective_maintenance` (`id`, `Problem`, `Corrective`, `Summary`, `RegDate`, `Images1`, `Images2`, `Username`) VALUES
(1, 'Duis consequat adipisicing aliquip labore labore ullamco proident et duis. Culpa culpa ea officia adipisicing aute anim ipsum sunt enim reprehenderit voluptate. Laborum enim voluptate enim minim officia dolore elit Lorem quis est culpa enim amet. Sit veniam ea irure ea aliqua exercitation. Dolore consequat occaecat sit labore nulla ipsum ea minim et non cupidatat. Consequat ea Lorem cillum ut tempor ipsum cupidatat nostrud.\r\nDolore minim anim anim exercitation consequat ullamco aliqua culpa labore aute amet ut est ut. Occaecat eu occaecat adipisicing occaecat ut commodo nostrud. Ex anim elit in voluptate aliqua ut reprehenderit deserunt ullamco cupidatat qui magna enim. Consequat ullamco aute ipsum voluptate irure. Dolore officia ea velit reprehenderit aute consectetur veniam elit dolore officia. Proident qui esse cupidatat ut consectetur ut nulla ad laboris exercitation adipisicing amet enim et.', 'Irure incididunt eiusmod id consequat labore adipisicing. Nulla cupidatat ea ut ad sit dolor dolore aliquip culpa sint. Pariatur nisi cupidatat officia proident esse nisi quis in sunt ut est quis.\r\nIpsum commodo commodo ipsum tempor. Commodo eiusmod cillum amet excepteur eu pariatur irure dolore deserunt Lorem. Deserunt magna velit sint do aliqua ad laboris nostrud. Id ad velit quis pariatur ipsum eu duis Lorem sunt. Magna eu cupidatat commodo elit aliquip in sunt tempor reprehenderit. Adipisicing ut et consectetur irure.', 'Lorem anim consectetur mollit cupidatat voluptate ex ullamco ut irure fugiat ad tempor nulla qui. Reprehenderit nulla officia sit elit reprehenderit laborum et id veniam commodo esse minim anim Lorem. Labore nisi cillum deserunt ea incididunt eiusmod ipsum duis.', '2021-06-13', NULL, NULL, 'B6019938'),
(2, 'With threads from its mouth, it fashions sturdy webs that won’t break even if you set a rock on them.In ancient times, it lived in warm seas. It disguised itself as seaweed to ambush its prey and devoured them whole when they got close.Weepinbell has a large hook on its rear end. At night, the Pokémon hooks on to a tree branch and goes to sleep. If it moves around in its sleep, it may wake up to find itself on the ground.\r\n\r\nIf it gets wet, its body melts. When rain starts to fall, it wraps its whole body up with its psychic powers to protect itself.Weezing alternately shrinks and inflates its twin bodies to mix together toxic gases inside. The more the gases are mixed, the more powerful the toxins become. The Pokémon also becomes more putrid.This Pokémon drifts and floats with the wind. If it senses the approach of strong winds, Hoppip links its leaves with other Hoppip to prepare against being blown away.\r\n\r\nAlthough it has become capable of living on land, it spends its time in the water, where its prey, fish Pokémon, are plentiful.Lunatone becomes active around the time of the full moon. Instead of walking, it moves by floating in midair. The Pokémon’s intimidating red eyes cause all those who see it to become transfixed with fear.Perhaps because it would like to grow up quickly, it has a voracious appetite, eating a hundred leaves a day.', 'Its pantomime skills are wonderful. You may become enraptured while watching it, but next thing you know, Mr. Mime has made a real wall.Although it has become capable of living on land, it spends its time in the water, where its prey, fish Pokémon, are plentiful.Dusclops absorbs anything, however large the object may be. This Pokémon hypnotizes its foe by waving its hands in a macabre manner and by bringing its single eye to bear. The hypnotized foe is made to do Dusclops’s bidding.\r\n\r\nPeople say that it fled from its enemies by using its small webbed hind feet to swim from island to island in Alola.It fires hyper beams in all directions, burning the surrounding area to ash. There are some regions where it’s called “the deity of destruction.”Charizard flies around the sky in search of powerful opponents. It breathes fire of such great heat that it melts anything. However, it never turns its fiery breath on any opponent weaker than itself.\r\n\r\n', 'Now that we know who you are, I know who I am. I\'m not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain\'s going to be? He\'s the exact opposite of the hero. And most times they\'re friends, like you and me! I should\'ve known way back when... You know why, David? Because of the kids. They called me Mr Glass.', '2021-06-13', NULL, NULL, 'B6019938'),
(3, 'Born underground, it eats its way through dirt to the surface, where its parents are. It doesn’t deal well with the bright light it finds there.Combusken battles with the intensely hot flames it spews from its beak and with outstandingly destructive kicks. This Pokémon’s cry is very loud and distracting.Despite the smallness of its body, Totodile’s jaws are very powerful. While the Pokémon may think it is just playfully nipping, its bite has enough power to cause serious injury.\r\n\r\n', 'Born underground, it eats its way through dirt to the surface, where its parents are. It doesn’t deal well with the bright light it finds there.Combusken battles with the intensely hot flames it spews from its beak and with outstandingly destructive kicks. This Pokémon’s cry is very loud and distracting.Despite the smallness of its body, Totodile’s jaws are very powerful. While the Pokémon may think it is just playfully nipping, its bite has enough power to cause serious injury.\r\n\r\nBorn underground, it eats its way through dirt to the surface, where its parents are. It doesn’t deal well with the bright light it finds there.Combusken battles with the intensely hot flames it spews from its beak and with outstandingly destructive kicks. This Pokémon’s cry is very loud and distracting.Despite the smallness of its body, Totodile’s jaws are very powerful. While the Pokémon may think it is just playfully nipping, its bite has enough power to cause serious injury.\r\n\r\n', 'Born underground, it eats its way through dirt to the surface, where its parents are. It doesn’t deal well with the bright light it finds there.Combusken battles with the intensely hot flames it spews from its beak and with outstandingly destructive kicks. This Pokémon’s cry is very loud and distracting.Despite the smallness of its body, Totodile’s jaws are very powerful. While the Pokémon may think it is just playfully nipping, its bite has enough power to cause serious injury.\r\n\r\n', '2021-06-13', 'c573bf41-6a7c-4927-845c-4ca0260aad6b-760x400.jpeg', 'why-image.jpg', 'B6019938'),
(4, 'Ralts has the ability to sense the emotions of people. If its Trainer is in a cheerful mood, this Pokémon grows cheerful and joyous in the same way.The color of its body changes with the water temperature. The coloration of Gorebyss in Alola is almost blindingly vivid.This troublesome Pokémon can’t wait to evolve, so it relieves its stress by wildly propelling itself around using compressed gas.\r\n\r\nRalts has the ability to sense the emotions of people. If its Trainer is in a cheerful mood, this Pokémon grows cheerful and joyous in the same way.The color of its body changes with the water temperature. The coloration of Gorebyss in Alola is almost blindingly vivid.This troublesome Pokémon can’t wait to evolve, so it relieves its stress by wildly propelling itself around using compressed gas.\r\n\r\n', 'Ralts has the ability to sense the emotions of people. If its Trainer is in a cheerful mood, this Pokémon grows cheerful and joyous in the same way.The color of its body changes with the water temperature. The coloration of Gorebyss in Alola is almost blindingly vivid.This troublesome Pokémon can’t wait to evolve, so it relieves its stress by wildly propelling itself around using compressed gas.\r\n\r\n', 'Ralts has the ability to sense the emotions of people. If its Trainer is in a cheerful mood, this Pokémon grows cheerful and joyous in the same way.The color of its body changes with the water temperature. The coloration of Gorebyss in Alola is almost blindingly vivid.This troublesome Pokémon can’t wait to evolve, so it relieves its stress by wildly propelling itself around using compressed gas.\r\n\r\nRalts has the ability to sense the emotions of people. If its Trainer is in a cheerful mood, this Pokémon grows cheerful and joyous in the same way.The color of its body changes with the water temperature. The coloration of Gorebyss in Alola is almost blindingly vivid.This troublesome Pokémon can’t wait to evolve, so it relieves its stress by wildly propelling itself around using compressed gas.\r\n\r\n', '2021-06-14', 'why-image.jpg', 'c573bf41-6a7c-4927-845c-4ca0260aad6b-760x400.jpeg', 'B6019938'),
(5, 'Your bones don\'t break, mine do. That\'s clear. Your cells react to bacteria and viruses differently than mine. You don\'t get sick, I do. That\'s also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We\'re on the same curve, just on opposite ends.\r\nYou think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don\'t know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I\'m breaking now. We said we\'d say it was the snow that killed the other two, but it wasn\'t. Nature is lethal but it doesn\'t hold a candle to man.', 'When flames drip from its nose, that means it has a cold. Have it lie down for a nice rest in some magma.Sealeo often balances and rolls things on the tip of its nose. While the Pokémon is rolling something, it checks the object’s aroma and texture to determine whether it likes the object or not.When Dustox flaps its wings, a fine dust is scattered all over. This dust is actually a powerful poison that will even make a pro wrestler sick. This Pokémon searches for food using its antennae like radar.\r\n\r\nKingler has an enormous, oversized claw. It waves this huge claw in the air to communicate with others. However, because the claw is so heavy, the Pokémon quickly tires.Voltorb is extremely sensitive—it explodes at the slightest of shocks. It is rumored that it was first created when a Poké Ball was exposed to a powerful pulse of energy.Lugia’s wings pack devastating power—a light fluttering of its wings can blow apart regular houses. As a result, this Pokémon chooses to live out of sight deep under the sea.\r\n\r\n', 'Once this Pokémon has gained enough confidence and muscle from training with its friends, it challenges Makuhita to a battle.The more arid and harsh the environment, the more pretty and fragrant a flower Cacnea grows. This Pokémon battles by wildly swinging its thorny arms.Although it originally had no powers at all, people say its precognitive faculties were awakened by its need to protect itself.\r\n\r\nSeviper’s swordlike tail serves two purposes—it slashes foes and douses them with secreted poison. This Pokémon will not give up its long-running blood feud with Zangoose.A cunning and terrifying Pokémon, its cuteness makes opponents let down their guard—and then it swallows them whole with its huge jaws.Skitty is known to chase around playfully after its own tail. In the wild, this Pokémon lives in holes in the trees of forests. It is very popular as a pet because of its adorable looks.\r\n\r\n', '2021-06-14', 'why-image.jpg', 'c573bf41-6a7c-4927-845c-4ca0260aad6b-760x400.jpeg', 'B6019938'),
(6, 'It travels by digging through the ground. Diglett and Dunsparce share one another’s tunnels happily.They live in groups. The one with the longest, thickest, and most-scarred horns is the boss of the herd.Azumarill can make balloons out of air. It makes these air balloons if it spots a drowning Pokémon. The air balloons enable the Pokémon in trouble to breathe.\r\n\r\nThe fragrance of Meganium’s flower soothes and calms emotions. In battle, this Pokémon gives off more of its becalming scent to blunt the foe’s fighting spirit.Bayleef’s neck is ringed by curled-up leaves. Inside each tubular leaf is a small shoot of a tree. The fragrance of this shoot makes people peppy.Their food sources have decreased, and their numbers have declined sharply. Sludge ponds are being built to prevent their extinction.\r\n\r\n', 'Despite the danger, it wants to come up on land. So it does its best to waddle along, but when an enemy finds it, it rushes back to the water.Kangaskhan protects its child by keeping it in its pouch. It has zero forgiveness for those who harm its child and will beat them down.Its incisors grow continuously throughout its life. If its incisors get too long, this Pokémon becomes unable to eat, and it starves to death.\r\n\r\nIt grasps its opponents with its four arms and twists them up in an intricate hold. People call it “the Machamp special.”It grasps its opponents with its four arms and twists them up in an intricate hold. People call it “the Machamp special.”Marshtomp is much faster at traveling through mud than it is at swimming. This Pokémon’s hindquarters exhibit obvious development, giving it the ability to walk on just its hind legs.\r\n\r\n', 'Krabby live on beaches, burrowed inside holes dug into the sand. On sandy beaches with little in the way of food, these Pokémon can be seen squabbling with each other over territory.Nincada lives underground. It uses its sharp claws to carve the roots of trees and absorb moisture and nutrients. This Pokémon can’t withstand bright sunlight so avoids it.It throws bones at Mandibuzz to knock it down. It’s thought that Marowak is trying to avenge its parent.\r\n\r\nThe color of its body changes with the water temperature. The coloration of Gorebyss in Alola is almost blindingly vivid.Its body had begun to change so it could function on land. But it didn’t adapt in time and went extinct.Delicate equipment can malfunction in areas inhabited by Magneton, which send out mysterious electrical signals.\r\n\r\n', '2021-06-14', 'Screen Shot 2564-05-17 at 15.28.53.png', 'Screen Shot 2564-05-17 at 15.29.55.png', 'B6019938'),
(7, 'Omanyte lived in the seas of antiquity. Its fossils have been found bearing bite marks from Archeops, so apparently Archeops preyed on it.Blastoise has water spouts that protrude from its shell. The water spouts are very accurate. They can shoot bullets of water with enough accuracy to strike empty cans from a distance of over 160 feet.Whether it’s due to a lack of moisture or a lack of nutrients, in Alola the mushrooms on Paras don’t grow up quite right.\r\n\r\nIn the places on its body where fleece doesn’t grow, its skin is rubbery and doesn’t conduct electricity. Those spots are safe to touch.The seeds ringing Breloom’s tail are made of hardened toxic spores. It is horrible to eat the seeds. Just taking a bite of this Pokémon’s seed will cause your stomach to rumble.Gligar glides through the air without a sound as if it were sliding. This Pokémon hangs on to the face of its foe using its clawed hind legs and the large pincers on its forelegs, then injects the prey with its poison barb.\r\n\r\n', 'It doesn’t do anything other than eat and sleep. When prompted to make a serious effort, though, it apparently displays awesome power.Weepinbell has a large hook on its rear end. At night, the Pokémon hooks on to a tree branch and goes to sleep. If it moves around in its sleep, it may wake up to find itself on the ground.Its steps are shaky and stumbling. Walking for a long time makes it feel sick.\r\n\r\nSlakoth’s heart beats just once a minute. Whatever happens, it is content to loaf around motionless. It is rare to see this Pokémon in motion.When it encounters an enemy that’s truly mighty, this Pokémon removes the power-save belt from its waist and unleashes its full power.When Dustox flaps its wings, a fine dust is scattered all over. This dust is actually a powerful poison that will even make a pro wrestler sick. This Pokémon searches for food using its antennae like radar.\r\n\r\n', 'With its long, thin wings, it catches updrafts and flies like a glider high up into the sky.It cooperates with others skillfully. When it becomes your partner, it’s very loyal to you as its Trainer and will obey your orders.Shiftry’s large fans generate awesome gusts of wind at a speed close to 100 feet per second. The whipped-up wind blows anything away. This Pokémon chooses to live quietly deep in forests.\r\n\r\nManectric can be found beneath unnatural thunderclouds. People say it can run at the same speed as lightning striking.At night, it weeps loudly for its dead mother, but those cries only attract its natural enemy—Mandibuzz.Gligar glides through the air without a sound as if it were sliding. This Pokémon hangs on to the face of its foe using its clawed hind legs and the large pincers on its forelegs, then injects the prey with its poison barb.\r\n\r\n', '2021-06-14', 'why-image.jpg', 'c573bf41-6a7c-4927-845c-4ca0260aad6b-760x400.jpeg', 'B6019938'),
(8, 'Vileplume has the world’s largest petals. They are used to attract prey that are then doused with toxic spores. Once the prey are immobilized, this Pokémon catches and devours them.Slakoth’s heart beats just once a minute. Whatever happens, it is content to loaf around motionless. It is rare to see this Pokémon in motion.Friction between the air and its fur produces static electricity. When Electrike runs, it makes a crackling sound.\r\n\r\nIt can’t help but hear a pin drop from over half a mile away, so it lives deep in the mountains where there aren’t many people or Pokémon.Poochyena is an omnivore—it will eat anything. A distinguishing feature is how large its fangs are compared to its body. This Pokémon tries to intimidate its foes by making the hair on its tail bristle out.This Pokémon has a dazzling plumage of beautifully glossy feathers. Many Trainers are captivated by the striking beauty of the feathers on its head, compelling them to choose Pidgeot as their Pokémon.\r\n\r\n', 'While the three of them normally get along splendidly, on rare occasions a huge fight will break out over which head gets to eat first.This Pokémon came from the future by crossing over time. It is thought that so long as Celebi appears, a bright and shining future awaits us.Illumise leads a flight of illuminated Volbeat to draw signs in the night sky. This Pokémon is said to earn greater respect from its peers by composing more complex designs in the sky.\r\n\r\nLatios will only open its heart to a Trainer with a compassionate spirit. This Pokémon can fly faster than a jet plane by folding its forelegs to minimize air resistance.Normally, it lived on shallow sea shoals. When the tide went out, this Pokémon came up on land to search for prey.Overjoyed at finally being able to fly, it flies all over the place and usually doesn’t land until it’s completely exhausted and needs to sleep.\r\n\r\n', 'Wurmple is targeted by Swellow as prey. This Pokémon will try to resist by pointing the spikes on its rear at the attacking predator. It will weaken the foe by leaking poison from the spikes.Togetic is said to be a Pokémon that brings good fortune. When the Pokémon spots someone who is pure of heart, it is said to appear and share its happiness with that person.Every once in a while, you’ll see a Golbat that’s missing some fangs. This happens when hunger drives it to try biting a Steel-type Pokémon.\r\n\r\nElectricity permeates its body. It swings its arms round and round to charge up electricity before unleashing a punch.Every day, it tilts its head in the same rhythm. A long time ago, people raised these Pokémon to serve as clocks.The cells within its body are changing at a bewildering pace. Its hard shell is made from the same substance as bone.\r\n\r\n', '2021-06-14', '128893196_4348409001859874_405885368928149432_o.jpg', '94757583_3841479922560926_5641865745785683968_o.jpg', 'B6019938'),
(9, 'The flame that burns at the tip of its tail is an indication of its emotions. The flame wavers when Charmander is enjoying itself. If the Pokémon becomes enraged, the flame burns fiercely.Once Croconaw has clamped its jaws on its foe, it will absolutely not let go. Because the tips of its fangs are forked back like barbed fishhooks, they become impossible to remove when they have sunk in.When visiting a junkyard, you may catch sight of it having an intense fight with Murkrow over shiny objects.\r\n\r\nClean, clear waters are its usual habitat. When it’s about to be attacked by an invading enemy, it dives into the water to hide.What gives meaning to its life is surprising others. If you set your ear against the red orbs around its neck, you can hear shrieking.When Sentret sleeps, it does so while another stands guard. The sentry wakes the others at the first sign of danger. When this Pokémon becomes separated from its pack, it becomes incapable of sleep due to fear.\r\n\r\n', 'When it examines things, before touching them with its hands, it makes lip contact and then diligently licks all the dirt off its lips.At night, it weeps loudly for its dead mother, but those cries only attract its natural enemy—Mandibuzz.If Horsea senses danger, it will reflexively spray a dense black ink from its mouth and try to escape. This Pokémon swims by cleverly flapping the fin on its back.\r\n\r\nIt is vindictive and relentless by nature. Those who cross it even once will be cursed for a thousand years, along with their descendants.It climbs up cliffs as it heads toward the peak of a mountain. As soon as it reaches the summit, it rolls back down the way it came.It’s said that gas emanating from a graveyard was possessed by the grievances of the deceased and thus became a Pokémon.\r\n\r\n', 'Articuno is a legendary bird Pokémon that can control ice. The flapping of its wings chills the air. As a result, it is said that when this Pokémon flies, snow will fall.You can hear tales told all over the world about how Gengar will pay a visit to children who are naughty.It boasts not only psychic powers but also fantastic strength. It grabs its prey with its four legs and holds them in place with its claws.\r\n\r\nAlthough they enjoy comparing their strength, they’re also kind. They value etiquette, praising opponents they battle.Once this Pokémon has gained enough confidence and muscle from training with its friends, it challenges Makuhita to a battle.In the distant past, they were fairly strong, but they have become gradually weaker over time.\r\n\r\n', '2021-06-14', 'IMG_3260.jpg', 'balloon-5120x2880-girl-telephone-pole-4k-6k-18558.jpg', 'B6019938'),
(10, 'Articuno is a legendary bird Pokémon that can control ice. The flapping of its wings chills the air. As a result, it is said that when this Pokémon flies, snow will fall.You can hear tales told all over the world about how Gengar will pay a visit to children who are naughty.It boasts not only psychic powers but also fantastic strength. It grabs its prey with its four legs and holds them in place with its claws.\r\n\r\nAlthough they enjoy comparing their strength, they’re also kind. They value etiquette, praising opponents they battle.Once this Pokémon has gained enough confidence and muscle from training with its friends, it challenges Makuhita to a battle.In the distant past, they were fairly strong, but they have become gradually weaker over time.\r\n\r\n', 'Farfetch’d is always seen with a stalk from a plant of some sort. Apparently, there are good stalks and bad stalks. This Pokémon has been known to fight with others over stalks.Feraligatr intimidates its foes by opening its huge mouth. In battle, it will kick the ground hard with its thick and powerful hind legs to charge at the foe at an incredible speed.Individuals that have been set free by Trainers who could no longer raise them have become common, and they can now be found in Alola.\r\n\r\nExploud communicates its feelings to the others by emitting whistle-like sounds from the tubes on its body. This Pokémon only raises its voice when it is in battle.It checks out whatever’s around it by licking everything. If you don’t clean off a spot where it’s licked you, you’ll break out in a rash!Its body had begun to change so it could function on land. But it didn’t adapt in time and went extinct.\r\n\r\n', 'Bellsprout’s thin and flexible body lets it bend and sway to avoid any attack, however strong it may be. From its mouth, this Pokémon spits a corrosive fluid that melts even iron.This Pokémon is nocturnal. Even in total darkness, its large eyes can spot its prey clearly!There was an era when it was overfished due to the rumor that having one of its heart-shaped scales would enable you to find a sweetheart.\r\n\r\nWhen Golem grow old, they stop shedding their shells. Those that have lived a long, long time have shells green with moss.This Pokémon was created using the cutting-edge science of 20 years ago, so many parts of it have since become obsolete.It’s constantly coming up with new ideas that would change the world, but as soon as it hits upon a new idea, it forgets it.\r\n\r\n', '2021-06-14', 'IMG_6887.JPG', 'IMG_0407.jpg', 'B6019938'),
(11, 'Nidoran♂ has developed muscles for moving its ears. Thanks to them, the ears can be freely moved in any direction. Even the slightest sound does not escape this Pokémon’s notice.It boasts not only psychic powers but also fantastic strength. It grabs its prey with its four legs and holds them in place with its claws.Its pantomime skills are wonderful. You may become enraptured while watching it, but next thing you know, Mr. Mime has made a real wall.\r\n\r\nWhiscash shakes the ground at high intensities to intimidate its opponents. It swallows its prey whole—along with mud from the swamp floor.Kingdra sleeps on the seafloor where it is otherwise devoid of life. When a storm arrives, the Pokémon is said to awaken and wander about in search of prey.Swablu loves to make things clean. If it spots something dirty, it will wipe and polish it with its cottony wings. If its wings become dirty, this Pokémon finds a stream and showers itself.\r\n\r\n', 'Dusclops absorbs anything, however large the object may be. This Pokémon hypnotizes its foe by waving its hands in a macabre manner and by bringing its single eye to bear. The hypnotized foe is made to do Dusclops’s bidding.Torchic has a place inside its body where it keeps its flame. Give it a hug—it will be glowing with warmth. This Pokémon is covered all over by a fluffy coat of down.It lives in areas of limited rainfall. When danger approaches, it curls up into a ball to protect its soft stomach.\r\n\r\nIf Donphan were to tackle with its hard body, even a house could be destroyed. Using its massive strength, the Pokémon helps clear rock and mud slides that block mountain trails.In high winds, Chimecho cries as it hangs from a tree branch or the eaves of a building using a suction cup on its head. This Pokémon plucks berries with its long tail and eats them.Manectric can be found beneath unnatural thunderclouds. People say it can run at the same speed as lightning striking.\r\n\r\n', 'Electricity permeates its body. It swings its arms round and round to charge up electricity before unleashing a punch.Swampert predicts storms by sensing subtle differences in the sounds of waves and tidal winds with its fins. If a storm is approaching, it piles up boulders to protect itself.Nidorino has a horn that is harder than a diamond. If it senses a hostile presence, all the barbs on its back bristle up at once, and it challenges the foe with all its might.\r\n\r\nIt’s a stuffed toy that was thrown away and became possessed, ever searching for the one who threw it away so it can exact its revenge.Clean, clear waters are its usual habitat. When it’s about to be attacked by an invading enemy, it dives into the water to hide.Blastoise has water spouts that protrude from its shell. The water spouts are very accurate. They can shoot bullets of water with enough accuracy to strike empty cans from a distance of over 160 feet.\r\n\r\n', '2021-06-14', '128893196_4348409001859874_405885368928149432_o.jpg', 'IMG_6887.JPG', 'B6019938');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(11) UNSIGNED NOT NULL,
  `Images1` varchar(150) DEFAULT NULL,
  `Images2` varchar(150) DEFAULT NULL,
  `Username` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `Images1`, `Images2`, `Username`) VALUES
(1, 'Screen Shot 2564-06-08 at 17.37.48.png', 'Screen Shot 2564-06-08 at 18.54.16.png', 'B6019938'),
(2, 'why-image.jpg', 'c573bf41-6a7c-4927-845c-4ca0260aad6b-760x400.jpeg', 'B6019938'),
(3, 'c573bf41-6a7c-4927-845c-4ca0260aad6b-760x400.jpeg', 'why-image.jpg', 'B6019938'),
(4, 'c573bf41-6a7c-4927-845c-4ca0260aad6b-760x400.jpeg', 'c573bf41-6a7c-4927-845c-4ca0260aad6b-760x400.jpeg', 'B6019938');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) UNSIGNED NOT NULL,
  `Username` varchar(100) DEFAULT NULL,
  `Name` varchar(150) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `Username`, `Name`, `Password`) VALUES
(1, 'B6019938', 'นางสาวเมธาวี อรรถวัน', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tblauthor`
--

CREATE TABLE `tblauthor` (
  `id` int(11) UNSIGNED NOT NULL,
  `AuthorName` varchar(100) DEFAULT NULL,
  `PowerId` int(11) DEFAULT NULL,
  `InitialsId` int(11) DEFAULT NULL,
  `RegDate` date DEFAULT current_timestamp(),
  `Username` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblauthor`
--

INSERT INTO `tblauthor` (`id`, `AuthorName`, `PowerId`, `InitialsId`, `RegDate`, `Username`) VALUES
(1, 'นางสาวเมธาวี อรรถวัน', 1, 1, '2021-06-10', 'B6019938'),
(2, 'นางสาวเมธาวี อรรถวัน', 1, 1, '2021-06-13', 'B6019938'),
(3, 'นางสาวเมธาวี อรรถวัน', 1, 1, '2021-06-13', 'B6019938'),
(4, 'นางสาวเมธาวี อรรถวัน', 1, 1, '2021-06-13', 'B6019938'),
(5, 'นางสาวเมธาวี อรรถวัน', 1, 1, '2021-06-13', 'B6019938'),
(6, 'นางสาวเมธาวี อรรถวัน', 1, 1, '2021-06-14', 'B6019938'),
(7, 'นางสาวเมธาวี อรรถวัน', 1, 1, '2021-06-14', 'B6019938'),
(8, 'นางสาวเมธาวี อรรถวัน', 1, 1, '2021-06-14', 'B6019938'),
(9, 'นางสาวเมธาวี อรรถวัน', 1, 1, '2021-06-14', 'B6019938'),
(10, 'นางสาวเมธาวี อรรถวัน', 1, 1, '2021-06-14', 'B6019938'),
(11, 'นางสาวเมธาวี อรรถวัน', 1, 1, '2021-06-14', 'B6019938'),
(12, 'นางสาวเมธาวี อรรถวัน', 1, 1, '2021-06-14', 'B6019938'),
(13, 'นางสาวเมธาวี อรรถวัน', 1, 1, '2021-06-14', 'B6019938');

-- --------------------------------------------------------

--
-- Table structure for table `tblcm`
--

CREATE TABLE `tblcm` (
  `id` int(11) UNSIGNED NOT NULL,
  `Agency` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcm`
--

INSERT INTO `tblcm` (`id`, `Agency`) VALUES
(1, 'งานบำรุงรักษาโรงไฟฟ้า');

-- --------------------------------------------------------

--
-- Table structure for table `tblinitials`
--

CREATE TABLE `tblinitials` (
  `id` int(11) UNSIGNED NOT NULL,
  `Initials` varchar(100) DEFAULT NULL,
  `AgencyId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblinitials`
--

INSERT INTO `tblinitials` (`id`, `Initials`, `AgencyId`) VALUES
(1, 'หบลอ-ฟ.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblpower`
--

CREATE TABLE `tblpower` (
  `id` int(11) UNSIGNED NOT NULL,
  `PowerplantName` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpower`
--

INSERT INTO `tblpower` (`id`, `PowerplantName`) VALUES
(1, 'โรงไฟฟ้าลำตะคองชลภาวัฒนา');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `corrective_maintenance`
--
ALTER TABLE `corrective_maintenance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblauthor`
--
ALTER TABLE `tblauthor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcm`
--
ALTER TABLE `tblcm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblinitials`
--
ALTER TABLE `tblinitials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpower`
--
ALTER TABLE `tblpower`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `corrective_maintenance`
--
ALTER TABLE `corrective_maintenance`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblauthor`
--
ALTER TABLE `tblauthor`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblcm`
--
ALTER TABLE `tblcm`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblinitials`
--
ALTER TABLE `tblinitials`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblpower`
--
ALTER TABLE `tblpower`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
