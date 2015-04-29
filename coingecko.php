<?php

/*
Plugin Name: CoinGecko.com Price Tracker
Plugin URI: http://www.morningminerals.com
Description: Display the latest crypto prices
Author: Akira Takizawa
Version: 1.0.0
Author URI: http://www.morningminerals.com
*/

class CoinGecko extends WP_Widget {

	// constructor
	function CoinGecko() {
	        parent::WP_Widget(false, $name = __('CoinGecko.com Price Tracker', 'wp_widget_plugin') );
    
	}

// widget form creation
function form($instance) {

if( $instance) {
     $crypto = $instance['crypto'];
     $currency = $instance['currency'];
} else {
     $crypto = 'bitcoin';
     $currency = 'usd';
}

/*$defaults = array(
     'crypto' => 'minerals',
     'currency'=> 'btc'
);*/


// $instance = wp_parse_args( (array) $instance, $defaults );

?>

<p>
    <label for="<?php echo $this->get_field_id('crypto'); ?>"><?php _e('Coin', 'wp_widget_plugin'); ?></label>
    <select id="<?php echo $this->get_field_id('crypto'); ?>" name="<?php echo $this->get_field_name('crypto'); ?>" type="text">      
        <option value="anoncoin" <?php selected($instance['crypto'], 'anoncoin'); ?>>Anoncoin</option>
	<option value="asiacoin" <?php selected($instance['crypto'], 'asiacoin'); ?>>Asiacoin</option>
	<option value="auroracoin" <?php selected($instance['crypto'], 'auroracoin'); ?>>Auroracoin</option>
	<option value="bitbar" <?php selected($instance['crypto'], 'bitbar'); ?>>Bitbar</option>
	<option value="bitcoin" <?php selected($instance['crypto'], 'bitcoin'); ?>>Bitcoin</option>
	<option value="bitshares" <?php selected($instance['crypto'], 'bitshares'); ?>>BitShares</option>
	<option value="blackcoin" <?php selected($instance['crypto'], 'blackcoin'); ?>>BlackCoin</option>
	<option value="bluecoin" <?php selected($instance['crypto'], 'bluecoin'); ?>>Bluecoin</option>
	<option value="bytecoin" <?php selected($instance['crypto'], 'bytecoin'); ?>>Bytecoin</option>
	<option value="cinni" <?php selected($instance['crypto'], 'cinni'); ?>>Cinni</option>
	<option value="cloakcoin" <?php selected($instance['crypto'], 'cloakcoin'); ?>>Cloakcoin</option>
	<option value="communitycoin" <?php selected($instance['crypto'], 'communitycoin'); ?>>Communitycoin</option>
	<option value="counterparty" <?php selected($instance['crypto'], 'counterparty'); ?>>Counterparty</option>
	<option value="cryptcoin" <?php selected($instance['crypto'], 'cryptcoin'); ?>>CryptCoin</option>
	<option value="curecoin" <?php selected($instance['crypto'], 'curecoin'); ?>>Curecoin</option>
	<option value="dash" <?php selected($instance['crypto'], 'dash'); ?>>Dash</option>
	<option value="devcoin" <?php selected($instance['crypto'], 'devcoin'); ?>>Devcoin</option>
	<option value="digibyte" <?php selected($instance['crypto'], 'digibyte'); ?>>Digibyte</option>
	<option value="digitalcoin" <?php selected($instance['crypto'], 'digitalcoin'); ?>>Digitalcoin</option>
	<option value="dnotes" <?php selected($instance['crypto'], 'dnotes'); ?>>DNotes</option>
	<option value="dogecoin" <?php selected($instance['crypto'], 'dogecoin'); ?>>Dogecoin</option>
	<option value="einsteinium" <?php selected($instance['crypto'], 'einsteinium'); ?>>Einsteinium</option>
	<option value="feathercoin" <?php selected($instance['crypto'], 'feathercoin'); ?>>Feathercoin</option>
	<option value="fedoracoin" <?php selected($instance['crypto'], 'fedoracoin'); ?>>Fedoracoin</option>
	<option value="fluttercoin" <?php selected($instance['crypto'], 'fluttercoin'); ?>>Fluttercoin</option>
	<option value="franko" <?php selected($instance['crypto'], 'franko'); ?>>Franko</option>
	<option value="freicoin" <?php selected($instance['crypto'], 'freicoin'); ?>>Freicoin</option>
	<option value="globalboost" <?php selected($instance['crypto'], 'globalboost'); ?>>GlobalBoost</option>
	<option value="goldcoin" <?php selected($instance['crypto'], 'goldcoin'); ?>>Goldcoin</option>
	<option value="groestlcoin" <?php selected($instance['crypto'], 'groestlcoin'); ?>>Groestlcoin</option>
	<option value="heavycoin" <?php selected($instance['crypto'], 'heavycoin'); ?>>Heavycoin</option>
	<option value="hobonickels" <?php selected($instance['crypto'], 'hobonickels'); ?>>Hobonickels</option>
	<option value="infinitecoin" <?php selected($instance['crypto'], 'infinitecoin'); ?>>Infinitecoin</option>
	<option value="ixcoin" <?php selected($instance['crypto'], 'ixcoin'); ?>>Ixcoin</option>
	<option value="karma" <?php selected($instance['crypto'], 'karma'); ?>>Karma</option>
	<option value="libertycoin" <?php selected($instance['crypto'], 'libertycoin'); ?>>LibertyCoin</option>
	<option value="litecoin" <?php selected($instance['crypto'], 'litecoin'); ?>>Litecoin</option>
	<option value="maidsafecoin" <?php selected($instance['crypto'], 'maidsafecoin'); ?>>MaidSafeCoin</option>
	<option value="mastercoin" <?php selected($instance['crypto'], 'mastercoin'); ?>>Mastercoin (Omni)</option>
	<option value="maxcoin" <?php selected($instance['crypto'], 'maxcoin'); ?>>Maxcoin</option>
	<option value="mazacoin" <?php selected($instance['crypto'], 'mazacoin'); ?>>Mazacoin</option>
	<option value="megacoin" <?php selected($instance['crypto'], 'megacoin'); ?>>Megacoin</option>
	<option value="mincoin" <?php selected($instance['crypto'], 'mincoin'); ?>>Mincoin</option>
	<option value="minerals" <?php selected($instance['crypto'], 'minerals'); ?>>Minerals</option>
	<option value="mintcoin" <?php selected($instance['crypto'], 'mintcoin'); ?>>Mintcoin</option>
	<option value="monero" <?php selected($instance['crypto'], 'monero'); ?>>Monero</option>
	<option value="monocle" <?php selected($instance['crypto'], 'monocle'); ?>>Monocle</option>
	<option value="myriadcoin" <?php selected($instance['crypto'], 'myriadcoin'); ?>>Myriadcoin</option>
	<option value="namecoin" <?php selected($instance['crypto'], 'namecoin'); ?>>Namecoin</option>
	<option value="nautiluscoin" <?php selected($instance['crypto'], 'nautiluscoin'); ?>>Nautiluscoin</option>
	<option value="netcoin" <?php selected($instance['crypto'], 'netcoin'); ?>>Netcoin</option>
	<option value="novacoin" <?php selected($instance['crypto'], 'novacoin'); ?>>Novacoin</option>
	<option value="nxt" <?php selected($instance['crypto'], 'nxt'); ?>>NXT</option>
	<option value="peercoin" <?php selected($instance['crypto'], 'peercoin'); ?>>Peercoin</option>
	<option value="potcoin" <?php selected($instance['crypto'], 'potcoin'); ?>>Potcoin</option>
	<option value="primecoin" <?php selected($instance['crypto'], 'primecoin'); ?>>Primecoin</option>
	<option value="quark" <?php selected($instance['crypto'], 'quark'); ?>>Quark</option>
	<option value="razor" <?php selected($instance['crypto'], 'razor'); ?>>Razor</option>
	<option value="reddcoin" <?php selected($instance['crypto'], 'reddcoin'); ?>>Reddcoin</option>
	<option value="ripple" <?php selected($instance['crypto'], 'ripple'); ?>>Ripple</option>
	<option value="tacocoin" <?php selected($instance['crypto'], 'tacocoin'); ?>>Tacocoin</option>
	<option value="terracoin" <?php selected($instance['crypto'], 'terracoin'); ?>>Terracoin</option>
	<option value="ultracoin" <?php selected($instance['crypto'], 'ultracoin'); ?>>Ultracoin</option>
	<option value="unobtanium" <?php selected($instance['crypto'], 'unobtanium'); ?>>Unobtanium</option>
	<option value="usde" <?php selected($instance['crypto'], 'usde'); ?>>USDe</option>
	<option value="vericoin" <?php selected($instance['crypto'], 'vericoin'); ?>>VeriCoin</option>
	<option value="vertcoin" <?php selected($instance['crypto'], 'vertcoin'); ?>>Vertcoin</option>
	<option value="whitecoin" <?php selected($instance['crypto'], 'whitecoin'); ?>>Whitecoin</option>
	<option value="worldcoin" <?php selected($instance['crypto'], 'worldcoin'); ?>>Worldcoin</option>
	<option value="xcurrency" <?php selected($instance['crypto'], 'xcurrency'); ?>>XCurrency</option>
	<option value="ybcoin" <?php selected($instance['crypto'], 'ybcoin'); ?>>Ybcoin</option>
	<option value="zeitcoin" <?php selected($instance['crypto'], 'zeitcoin'); ?>>Zeitcoin</option>
	<option value="zetacoin" <?php selected($instance['crypto'], 'zetacoin'); ?>>Zetacoin</option>
	<option value="ribbitrewards" <?php selected($instance['crypto'], 'ribbitrewards'); ?>>RibbitRewards</option>
	<option value="judgecoin" <?php selected($instance['crypto'], 'judgecoin'); ?>>Judgecoin</option>
	<option value="fimkrypto" <?php selected($instance['crypto'], 'fimkrypto'); ?>>FIMKrypto</option>
	<option value="sexcoin" <?php selected($instance['crypto'], 'sexcoin'); ?>>Sexcoin</option>
	<option value="fractalcoin" <?php selected($instance['crypto'], 'fractalcoin'); ?>>Fractalcoin</option>
	<option value="philosopherstone" <?php selected($instance['crypto'], 'philosopherstone'); ?>>PhilosopherStone</option>
	<option value="piggycoin" <?php selected($instance['crypto'], 'piggycoin'); ?>>Piggycoin</option>
	<option value="wankcoin" <?php selected($instance['crypto'], 'wankcoin'); ?>>Wankcoin</option>
	<option value="monetaryunit" <?php selected($instance['crypto'], 'monetaryunit'); ?>>MonetaryUnit</option>
	<option value="startcoin" <?php selected($instance['crypto'], 'startcoin'); ?>>Startcoin</option>
	<option value="supernet" <?php selected($instance['crypto'], 'supernet'); ?>>SuperNET</option>
	<option value="hyperstake" <?php selected($instance['crypto'], 'hyperstake'); ?>>HyperStake</option>
	<option value="fantomcoin" <?php selected($instance['crypto'], 'fantomcoin'); ?>>Fantomcoin</option>
	<option value="phoenixcoin" <?php selected($instance['crypto'], 'phoenixcoin'); ?>>Phoenixcoin</option>
	<option value="crypti" <?php selected($instance['crypto'], 'crypti'); ?>>Crypti</option>
	<option value="dogeparty" <?php selected($instance['crypto'], 'dogeparty'); ?>>Dogeparty</option>
	<option value="czechcrowncoin" <?php selected($instance['crypto'], 'czechcrowncoin'); ?>>CzechCrownCoin</option>
	<option value="cryptobullion" <?php selected($instance['crypto'], 'cryptobullion'); ?>>Crypto Bullion</option>
	<option value="luckycoin" <?php selected($instance['crypto'], 'luckycoin'); ?>>Luckycoin</option>
	<option value="shibecoin" <?php selected($instance['crypto'], 'shibecoin'); ?>>Shibecoin</option>
	<option value="gems" <?php selected($instance['crypto'], 'gems'); ?>>Gems</option>
	<option value="nxttycoin" <?php selected($instance['crypto'], 'nxttycoin'); ?>>Nxttycoin</option>
	<option value="bitusd" <?php selected($instance['crypto'], 'bitusd'); ?>>BitUSD</option>
	<option value="coinshield" <?php selected($instance['crypto'], 'coinshield'); ?>>CoinShield</option>
	<option value="bottlecaps" <?php selected($instance['crypto'], 'bottlecaps'); ?>>Bottlecaps</option>
	<option value="supercoin" <?php selected($instance['crypto'], 'supercoin'); ?>>SuperCoin</option>
	<option value="sonicscrewdriver" <?php selected($instance['crypto'], 'sonicscrewdriver'); ?>>SonicScrewdriver</option>
	<option value="magi" <?php selected($instance['crypto'], 'magi'); ?>>Magi</option>
	<option value="nushares" <?php selected($instance['crypto'], 'nushares'); ?>>NuShares</option>
	<option value="jumbucks" <?php selected($instance['crypto'], 'jumbucks'); ?>>Jumbucks</option>
	<option value="xcash" <?php selected($instance['crypto'], 'xcash'); ?>>xCash</option>
	<option value="syscoin" <?php selected($instance['crypto'], 'syscoin'); ?>>Syscoin</option>
	<option value="viacoin" <?php selected($instance['crypto'], 'viacoin'); ?>>Viacoin</option>
	<option value="earthcoin" <?php selected($instance['crypto'], 'earthcoin'); ?>>Earthcoin</option>
	<option value="utilitycoin" <?php selected($instance['crypto'], 'utilitycoin'); ?>>UtilityCoin</option>
	<option value="hamradiocoin" <?php selected($instance['crypto'], 'hamradiocoin'); ?>>HamRadioCoin</option>
	<option value="boolberry" <?php selected($instance['crypto'], 'boolberry'); ?>>Boolberry</option>
	<option value="cannabiscoin" <?php selected($instance['crypto'], 'cannabiscoin'); ?>>CannabisCoin</option>
	<option value="aidbit" <?php selected($instance['crypto'], 'aidbit'); ?>>AidBit</option>
	<option value="bitcoindark" <?php selected($instance['crypto'], 'bitcoindark'); ?>>BitcoinDark</option>
	<option value="socialxbot" <?php selected($instance['crypto'], 'socialxbot'); ?>>SocialxBot</option>
	<option value="nubits" <?php selected($instance['crypto'], 'nubits'); ?>>NuBits</option>
	<option value="crave" <?php selected($instance['crypto'], 'crave'); ?>>Crave</option>
	<option value="acoin" <?php selected($instance['crypto'], 'acoin'); ?>>Acoin</option>
	<option value="unbreakablecoin" <?php selected($instance['crypto'], 'unbreakablecoin'); ?>>Unbreakablecoin</option>
	<option value="ufocoin" <?php selected($instance['crypto'], 'ufocoin'); ?>>UFO Coin</option>
	<option value="gamerscoin" <?php selected($instance['crypto'], 'gamerscoin'); ?>>GamersCoin</option>
	<option value="bitswift" <?php selected($instance['crypto'], 'bitswift'); ?>>BitSwift</option>
	<option value="trollcoin" <?php selected($instance['crypto'], 'trollcoin'); ?>>Trollcoin</option>
	<option value="sterlingcoin" <?php selected($instance['crypto'], 'sterlingcoin'); ?>>Sterlingcoin</option>
	<option value="groupcoin" <?php selected($instance['crypto'], 'groupcoin'); ?>>Groupcoin</option>
	<option value="librexcoin" <?php selected($instance['crypto'], 'librexcoin'); ?>>Librexcoin</option>
	<option value="cryptoescudo" <?php selected($instance['crypto'], 'cryptoescudo'); ?>>CryptoEscudo</option>
	<option value="bitz" <?php selected($instance['crypto'], 'bitz'); ?>>Bitz</option>
	<option value="iocoin" <?php selected($instance['crypto'], 'iocoin'); ?>>IOCoin</option>
	<option value="archcoin" <?php selected($instance['crypto'], 'archcoin'); ?>>ARCHcoin</option>
	<option value="xcoin" <?php selected($instance['crypto'], 'xcoin'); ?>>X-Coin</option>
	<option value="htmlcoin" <?php selected($instance['crypto'], 'htmlcoin'); ?>>HTMLcoin</option>
	<option value="bitmark" <?php selected($instance['crypto'], 'bitmark'); ?>>Bitmark</option>
	<option value="titcoin" <?php selected($instance['crypto'], 'titcoin'); ?>>Titcoin</option>
	<option value="gaia" <?php selected($instance['crypto'], 'gaia'); ?>>GAIA</option>
	<option value="guldencoin" <?php selected($instance['crypto'], 'guldencoin'); ?>>Guldencoin</option>
	<option value="hyper" <?php selected($instance['crypto'], 'hyper'); ?>>Hyper</option>
	<option value="burst" <?php selected($instance['crypto'], 'burst'); ?>>Burst</option>
	<option value="applebyte" <?php selected($instance['crypto'], 'applebyte'); ?>>AppleByte</option>
	<option value="rubycoin" <?php selected($instance['crypto'], 'rubycoin'); ?>>Rubycoin</option>
	<option value="neoscoin" <?php selected($instance['crypto'], 'neoscoin'); ?>>Neoscoin</option>
	<option value="jackpotcoin" <?php selected($instance['crypto'], 'jackpotcoin'); ?>>Jackpotcoin</option>
	<option value="litecoindark" <?php selected($instance['crypto'], 'litecoindark'); ?>>LitecoinDark</option>
	<option value="techcoin" <?php selected($instance['crypto'], 'techcoin'); ?>>Techcoin</option>
	<option value="solarcoin" <?php selected($instance['crypto'], 'solarcoin'); ?>>Solarcoin</option>
	<option value="huntercoin" <?php selected($instance['crypto'], 'huntercoin'); ?>>Huntercoin</option>
	<option value="navajo" <?php selected($instance['crypto'], 'navajo'); ?>>Navajo</option>
	<option value="darknote" <?php selected($instance['crypto'], 'darknote'); ?>>DarkNote</option>
	<option value="nxtventure" <?php selected($instance['crypto'], 'nxtventure'); ?>>NXTventure</option>
	<option value="shadowcash" <?php selected($instance['crypto'], 'shadowcash'); ?>>ShadowCash</option>
	<option value="execoin" <?php selected($instance['crypto'], 'execoin'); ?>>Execoin</option>
	<option value="dirac" <?php selected($instance['crypto'], 'dirac'); ?>>Dirac</option>
	<option value="saffroncoin" <?php selected($instance['crypto'], 'saffroncoin'); ?>>Saffroncoin</option>
	<option value="qibuck" <?php selected($instance['crypto'], 'qibuck'); ?>>Qibuck</option>
	<option value="maryjane" <?php selected($instance['crypto'], 'maryjane'); ?>>MaryJane</option>
	<option value="mastertradercoin" <?php selected($instance['crypto'], 'mastertradercoin'); ?>>MasterTraderCoin</option>
	<option value="virtacoin" <?php selected($instance['crypto'], 'virtacoin'); ?>>Virtacoin</option>
	<option value="bytecent" <?php selected($instance['crypto'], 'bytecent'); ?>>Bytecent</option>
	<option value="storjcoinx" <?php selected($instance['crypto'], 'storjcoinx'); ?>>Storjcoin X</option>
	<option value="monacoin" <?php selected($instance['crypto'], 'monacoin'); ?>>MonaCoin</option>
	<option value="qora" <?php selected($instance['crypto'], 'qora'); ?>>Qora</option>
	<option value="noblecoin" <?php selected($instance['crypto'], 'noblecoin'); ?>>NobleCoin</option>
	<option value="horizon" <?php selected($instance['crypto'], 'horizon'); ?>>Horizon</option>
	<option value="glowshares" <?php selected($instance['crypto'], 'glowshares'); ?>>GlowShares</option>
	<option value="stealthcoin" <?php selected($instance['crypto'], 'stealthcoin'); ?>>Stealthcoin</option>
	<option value="fibre" <?php selected($instance['crypto'], 'fibre'); ?>>Fibre</option>
	<option value="opal" <?php selected($instance['crypto'], 'opal'); ?>>Opal</option>
	<option value="dogecoindark" <?php selected($instance['crypto'], 'dogecoindark'); ?>>DogeCoinDark</option>
	<option value="bitleu" <?php selected($instance['crypto'], 'bitleu'); ?>>Bitleu</option>
	<option value="electronicgulden" <?php selected($instance['crypto'], 'electronicgulden'); ?>>Electronic Gulden</option>
	<option value="cryptonite"> <?php selected($instance['crypto'], 'cryptonite'); ?>Cryptonite</option>
	<option value="spreadcoin" <?php selected($instance['crypto'], 'spreadcoin'); ?>>SpreadCoin</option>
	<option value="tittiecoin" <?php selected($instance['crypto'], 'tittiecoin'); ?>>TittieCoin</option>
	<option value="ltbcoin" <?php selected($instance['crypto'], 'ltbcoin'); ?>>LTBcoin</option>
	<option value="stellar" <?php selected($instance['crypto'], 'stellar'); ?>>Stellar</option>
	<option value="pinkcoin" <?php selected($instance['crypto'], 'pinkcoin'); ?>>Pinkcoin</option>
	<option value="freshcoin" <?php selected($instance['crypto'], 'freshcoin'); ?>>Freshcoin</option>
	<option value="node" <?php selected($instance['crypto'], 'node'); ?>>Node</option>
	<option value="gsmcoin" <?php selected($instance['crypto'], 'gsmcoin'); ?>>GSMcoin</option>
	<option value="swarm" <?php selected($instance['crypto'], 'swarm'); ?>>Swarm</option>
	<option value="guarany" <?php selected($instance['crypto'], 'guarany'); ?>>Guarany</option>
	<option value="clams" <?php selected($instance['crypto'], 'clams'); ?>>Clams</option>
	<option value="fuelcoin" <?php selected($instance['crypto'], 'fuelcoin'); ?>>FuelCoin</option>
	<option value="apexcoin" <?php selected($instance['crypto'], 'apexcoin'); ?>>APEXcoin</option>
	<option value="blakecoin" <?php selected($instance['crypto'], 'blakecoin'); ?>>Blakecoin</option>
	<option value="gridcoin-research" <?php selected($instance['crypto'], 'gridcoin-research'); ?>>Gridcoin</option>
	<option value="ziftrcoin" <?php selected($instance['crypto'], 'ziftrcoin'); ?>>ziftrCOIN</option>
	<option value="banxshares" <?php selected($instance['crypto'], 'banxshares'); ?>>Banx Shares</option>
	<option value="nem" <?php selected($instance['crypto'], 'nem'); ?>>NEM</option>
	<option value="paycoin" <?php selected($instance['crypto'], 'paycoin'); ?>>PayCoin</option>
	<option value="pandacoin" <?php selected($instance['crypto'], 'pandacoin'); ?>>Pandacoin</option>
	<option value="uro" <?php selected($instance['crypto'], 'uro'); ?>>Uro</option>
	<option value="bitstar" <?php selected($instance['crypto'], 'bitstar'); ?>>Bitstar</option>
	<option value="florincoin" <?php selected($instance['crypto'], 'florincoin'); ?>>Florincoin</option>
	<option value="sync" <?php selected($instance['crypto'], 'sync'); ?>>Sync</option>
	<option value="bitstake" <?php selected($instance['crypto'], 'bitstake'); ?>>BitStake</option>
	<option value="cannacoin" <?php selected($instance['crypto'], 'cannacoin'); ?>>Cannacoin</option>
	<option value="fastcoin" <?php selected($instance['crypto'], 'fastcoin'); ?>>Fastcoin</option>
	<option value="rimbit" <?php selected($instance['crypto'], 'rimbit'); ?>>Rimbit</option>
	<option value="blocknet" <?php selected($instance['crypto'], 'blocknet'); ?>>Blocknet</option>
	<option value="eagscurrency" <?php selected($instance['crypto'], 'eagscurrency'); ?>>EagsCurrency</option>
	<option value="diamond" <?php selected($instance['crypto'], 'diamond'); ?>>Diamond</option>
	<option value="tilecoin" <?php selected($instance['crypto'], 'tilecoin'); ?>>TileCoin</option>
    </select>
</p>

<p>
    <label for="<?php echo $this->get_field_id('currency'); ?>"><?php _e('Currency', 'wp_widget_plugin'); ?></label>
    <select id="<?php echo $this->get_field_id('currency'); ?>" name="<?php echo $this->get_field_name('currency'); ?>" type="text">        
        <option value="btc" <?php selected($instance['currency'], 'btc'); ?>>BTC</option>
	<option value="usd" <?php selected($instance['currency'], 'usd'); ?>>USD</option>
	<option value="gbp" <?php selected($instance['currency'], 'gbp'); ?>>GBP</option>
	<option value="eur" <?php selected($instance['currency'], 'eur'); ?>>EUR</option>
	<option value="cny" <?php selected($instance['currency'], 'cny'); ?>>CNY</option>
	<option value="jpy" <?php selected($instance['currency'], 'jpy'); ?>>JPY</option>
	<option value="cad" <?php selected($instance['currency'], 'cad'); ?>>CAD</option>
	<option value="aud" <?php selected($instance['currency'], 'aud'); ?>>AUD</option>
	<option value="rub" <?php selected($instance['currency'], 'rub'); ?>>RUB</option>
	<option value="sek" <?php selected($instance['currency'], 'sek'); ?>>SEK</option>
	<option value="hkd" <?php selected($instance['currency'], 'hkd'); ?>>HKD</option>
	<option value="sgd" <?php selected($instance['currency'], 'sgd'); ?>>SGD</option>
	<option value="krw" <?php selected($instance['currency'], 'krw'); ?>>KRW</option>
	<option value="zar" <?php selected($instance['currency'], 'zar'); ?>>ZAR</option>
	<option value="inr" <?php selected($instance['currency'], 'inr'); ?>>INR</option>
	<option value="myr" <?php selected($instance['currency'], 'myr'); ?>>MYR</option>
	<option value="idr" <?php selected($instance['currency'], 'idr'); ?>>IDR</option>
	<option value="brl" <?php selected($instance['currency'], 'brl'); ?>>BRL</option>
	<option value="nzd" <?php selected($instance['currency'], 'nzd'); ?>>NZD</option>
	<option value="mxn" <?php selected($instance['currency'], 'mxn'); ?>>MXN</option>
	<option value="php" <?php selected($instance['currency'], 'php'); ?>>PHP</option>
	<option value="dkk" <?php selected($instance['currency'], 'dkk'); ?>>DKK</option>
	<option value="pln" <?php selected($instance['currency'], 'pln'); ?>>PLN</option>
	<option value="xau" <?php selected($instance['currency'], 'xau'); ?>>XAU</option>
	<option value="xag" <?php selected($instance['currency'], 'xag'); ?>>XAG</option>
    </select>
</p>

<?php
}

	
function update($new_instance, $old_instance) {
      $instance = $old_instance;
      // Fields     
      $instance['crypto'] = $new_instance['crypto'];
      $instance['currency'] = $new_instance['currency'];      
     return $instance;
}
	

// display widget
function widget($args, $instance) {
   extract( $args );
   
   $crypto = $instance['crypto'];
   $currency = $instance['currency'];  
   
   echo $before_widget;
  
  // Display the Coin Gecko ticker  
   echo '<div><iframe id="widget-ticker-preview" src="//www.coingecko.com/en/widget_component/ticker/'.$crypto.'/'.$currency.'?id='.$crypto.'" style="border:none; height:125px; width: 275px;" scrolling="no" frameborder="0" allowTransparency="true"></iframe></div>';
   
   echo $after_widget;
}
}

// register widget
add_action('widgets_init', create_function('', 'return register_widget("CoinGecko");')); 
?>