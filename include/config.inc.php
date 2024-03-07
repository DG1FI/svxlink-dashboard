<?

// category for header -> use "Hotspot", "Simplex" or "Repeater" 
define("HEADER_CAT","Hotspot");

// define your QTH
define("HEADER_QTH","Burg b. Magdeburg");

// define your QRG
define("HEADER_QRG","433.200 MHz");

// SysOp-Call
define("HEADER_SYSOP","SysOp: DG1FI");

// show additional FM network in site banner
define("FMNETWORK_EXTRA","");

// define your ECHOLINK node number if needed
define("EL_NODE_NR","123456");

// enable full access from all networks inclusive internet if set to 1, default is 0
define("FULLACCESS_OUTSIDE", 0);

// Change TG from Outside during FULLACCESS from OUTSIDE?
define("CHANGE_TG_OUTSIDE", 0);

// add additional 10 buttons so we have 20 now, default is only 10 buttons
define("ADD_BUTTONS", 0);

// enable shutdown option in system-menu, default is disabled
define("SHUTDOWN", 1);

// show next to the menu hf propagation if set to 1, default is 0
define("PROP_SHOW", 0);

// TOP or BOTTOM
define("MENUBUTTON", "TOP");

//
// Button keys define: description button, DTMF command or command, color of button
//
// DTMF keys
// syntax: 'KEY number,'Description','DTMF code','color button'.
//
define("KEY1", array(' Refl. Trennen ','*D0#','red'));
define("KEY2", array(' Refl. Verbinden ','*D1#','green'));
define("KEY3", array(' TG 1 ','*D1#','orange'));
define("KEY4", array(' TG 7 ','*D2#','orange'));
define("KEY5", array(' TG 262907', '*D3#','orange'));
define("KEY6", array(' TG 24 ','*9124#','purple'));
define("KEY7", array(' TG 262 ','*91262#','purple'));
define("KEY8", array(' TG 777 ','*91777#','purple'));
/* define("KEY9", array(' D9 ','*D9#','blue'));
define("KEY10", array(' D10 ','*D10#','red'));

// define additional 10 DTMF keys if ADD_BUTTONS set to 1
define("KEY11", array(' D11 ','*D11#','green'));
define("KEY12", array(' D12 ','*D12#','orange'));
define("KEY13", array(' D13 ','*D13#','orange'));
define("KEY14", array(' D14 ','*D14#','orange'));
define("KEY15", array(' D15 ','*D15#','purple'));
define("KEY16", array(' D16 ','*D16#','purple'));
define("KEY17", array(' D17 ','*D17#','orange'));
define("KEY18", array(' D18 ','*D18#','blue'));
define("KEY19", array(' D19 ','*D19#','blue'));
define("KEY20", array(' D20 ','*D20#','red')); */
?>
