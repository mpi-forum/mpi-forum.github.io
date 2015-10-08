<?
class TopNav {
    var $desc;
    var $url;

    function TopNav($desc, $url) {
        $this->desc = $desc;
        $this->url = $url;
    }
}

class Nav {
    var $name, $link, $children;
    
    # Many places call "Nav()" with the 2-argument version
    function Nav($name, $link, $children = "") {
        $this->name = $name;
        $this->link = $link;
        if ($children != "") {
            $this->children = $children;
        }
    }
}

function print_topnav() {
    global $top_navlist;
    for ($i = 0; $i < sizeof($top_navlist); ++$i) {
        if ($i > 0) {
            print("<span class=\"divider\">&nbsp;|&nbsp;</span>\n");
        }
        if (isset($top_navlist[$i]->url) && $i < sizeof($top_navlist) - 1) {
            print("<a href=\"" . $top_navlist[$i]->url . "\" class=\"quickbar\">" . 
                  $top_navlist[$i]->desc . "</a>");
        } else {
            print($top_navlist[$i]->desc);
        }
    }
    print("\n");
}

