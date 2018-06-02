<?php

  /**
    This is the Dumpit theme.

    This theme just dumps the received content.

    @package urlaube\dumpit
    @version 0.1a1
    @author  Yahe <hello@yahe.sh>
    @since   0.1a0
  */

  // ===== DO NOT EDIT HERE =====

  // prevent script from getting called directly
  if (!defined("URLAUBE")) { die(""); }

  if (!class_exists("Dumpit")) {
    class Dumpit extends Base implements Theme {

      public static function theme() {
        print("METHOD: ");
        var_dump(Main::METHOD());

        print("PROTOCOL: ");
        var_dump(Main::PROTOCOL());

        print("HOSTNAME: ");
        var_dump(Main::HOSTNAME());

        print("PORT: ");
        var_dump(Main::PORT());

        print("URI: ");
        var_dump(Main::URI());

        print("ROOTURI: ");
        var_dump(Main::ROOTURI());

        print("HANDLER: ");
        var_dump(Handlers::ACTIVE());

        print("PAGEINFO: ");
        var_dump(Main::PAGEINFO());

        print("PAGENUMBER: ");
        var_dump(Main::PAGENUMBER());

        print("PAGEMIN: ");
        var_dump(Main::PAGEMIN());

        print("PAGEMAX: ");
        var_dump(Main::PAGEMAX());

        print("CONTENT: ");
        var_dump(Main::CONTENT());

        // we're done
        return true;
      }

    }

    // register theme
    Themes::register("Dumpit", "theme", "dumpit");
  }

