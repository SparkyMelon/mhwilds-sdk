<?php

declare(strict_types=1);

namespace MHWilds\Models\Enums;

enum Species: string
{
    case FlyingWyvern  = 'flying-wyvern';
    case Fish          = 'fish';
    case Herbivore     = 'herbovire';
    case Lynian        = 'lynian';
    case Neopteron     = 'neopteron';
    case Carapaceon    = 'carapaceon';
    case FangedBeast   = 'fanged-beast';
    case BirdWyvern    = 'bird-wyvern';
    case PiscineWyvern = 'piscine-wyvern';
    case Leviathan     = 'leviathan';
    case BruteWyvern   = 'brute-wyvern';
    case FangedWyvern  = 'fanged-wyvern';
    case Amphibian     = 'amphibian';
    case Temnoceran    = 'temnoceran';
    case SnakeWyvern   = 'snake-wyvern';
    case ElderDragon   = 'elder-dragon';
    case Cephalopod    = 'cephalopod';
    case Construct     = 'construct';
    case Wingdrake     = 'wingdrake';
    case DemiElder     = 'demi-elder';
}
