<?php

  /**
    This is the Dumpit theme.

    This theme just dumps the received content.

    @package urlaube\dumpit
    @version 0.1a2
    @author  Yahe <hello@yahe.sh>
    @since   0.1a0
  */

  // ===== DO NOT EDIT HERE =====

  // prevent script from getting called directly
  if (!defined("URLAUBE")) { die(""); }

class Dumpit extends BaseSingleton implements Theme {

  public static function theme() {
    print("METHOD: ");
    var_dump(value(Main::class, METHOD));

    print("PROTOCOL: ");
    var_dump(value(Main::class, PROTOCOL));

    print("HOSTNAME: ");
    var_dump(value(Main::class, HOSTNAME));

    print("PORT: ");
    var_dump(value(Main::class, PORT));

    print("URI: ");
    var_dump(value(Main::class, URI));

    print("ROOTURI: ");
    var_dump(value(Main::class, ROOTURI));

    print("HANDLER: ");
    var_dump(Handlers::getActive());

    print("METADATA: ");
    var_dump(value(Main::class, METADATA));

    print("PAGE: ");
    var_dump(value(Main::class, PAGE));

    print("PAGECOUNT: ");
    var_dump(value(Main::class, PAGECOUNT));

    print("CONTENT: ");
    var_dump(value(Main::class, CONTENT));

    // we handled this page
    return true;
  }

}

// register theme
Themes::register(Dumpit::class, "theme", Dumpit::class);
