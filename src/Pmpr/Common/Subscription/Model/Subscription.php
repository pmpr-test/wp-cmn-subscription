<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6705173dec797             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Subscription\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; abstract class Subscription extends AbstractSub { public function register() { $this->muuwuqssqkaieqge(__("\x53\165\x62\x73\x63\162\151\160\x74\151\157\x6e\163", PR__CMN__SUBSCRIPTION))->guiaswksukmgageq(__("\x53\165\x62\x73\x63\x72\151\x70\164\151\x6f\x6e", PR__CMN__SUBSCRIPTION))->saemoowcasogykak(IconInterface::gmgqwyigwsaamusc); $this->ecmiqywsauuoccwo(Constants::ukwaycqmyyuekwqg)->ecmiqywsauuoccwo(Constants::ieioeisgwcgysukw)->ecmiqywsauuoccwo(Constants::awysmmukegasimmq)->ecmiqywsauuoccwo(Constants::weiosaewqequuyuq); $this->swsaakqseuaacagq(Constants::kasgeoiieeaeekiy, [$this, "\x73\x63\x6d\x6d\171\155\161\153\x6f\x79\143\153\x67\x6b\141\x6d"])->swsaakqseuaacagq(Constants::sciqoswsucgmimyi, [$this, "\x65\165\155\x75\x6f\171\x79\x6b\x6b\157\x75\167\145\151\x79\x69"]); } public function uwmqacgewuauagai() { $this->cquokmemekqqywgi($this->caokeucsksukesyo()->skckwsgymkimyuwo()->qwwuoqeeiyuoyogs(Constants::icymuyeowqaciyyu)->qcqeqimisiisswky()->gswweykyogmsyawy(__("\x45\170\x70\x69\162\141\x74\x69\x6f\156\40\x44\141\x74\145", PR__CMN__SUBSCRIPTION))); parent::uwmqacgewuauagai(); } public function aoqwywcqmoqaukkq() { parent::aoqwywcqmoqaukkq(); $qiouiwasaauyaaue = []; $omouioamescuegke = $this->uykissogmuaaocsg()->esqsaiqmmsyymoea(); $kekgkgqeyesmkywu = $omouioamescuegke->qyaiiayimwmuomey(false); foreach ($kekgkgqeyesmkywu as $gesuaewsacmmwoeo) { $qiouiwasaauyaaue[$omouioamescuegke->mwyqswsaeeewsosm($gesuaewsacmmwoeo)] = $omouioamescuegke->uikgwcuascgeissw($gesuaewsacmmwoeo); msemumccgceyugmg: } eogwckcymuugikuy: $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->yyoqecggyacaseko()->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::kiwgokskimawckie)->mkmssscwmeekwgqo()->acauweqyyugwisqc($qiouiwasaauyaaue))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::icymuyeowqaciyyu)->iccqusgqmsqaiqow()->mkmssscwmeekwgqo()); } public function qcgwasumiaaemeei($cusggmuosggikeas, $iueymcwwscwqkiyq = Constants::eqewsqmqmsiocaeg, $ogaeiucyqmowuqms = null) : array { $jwcssmswmaeskgam = []; if (!$cusggmuosggikeas) { goto iwsuawwqomaowuii; } $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $gqgemcmoicmgaqie = [$eqwoegegiamegqsm->megqywqeuquawkim(Constants::kuqwimiimiqsimgo, $cusggmuosggikeas)]; if (!$iueymcwwscwqkiyq) { goto wagqgeqymeqoeuyi; } $gqgemcmoicmgaqie[] = $eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, $iueymcwwscwqkiyq); $gqgemcmoicmgaqie[] = $eqwoegegiamegqsm->megqywqeuquawkim(Constants::icymuyeowqaciyyu, date("\x59\55\x6d\x2d\x64"))->wiqiksaowkoeiymu()->maqiysyuqmwcqoig(Constants::yqukaiimaoqseeee); wagqgeqymeqoeuyi: if (!$ogaeiucyqmowuqms) { goto qoqskyuuwueqkquk; } $gqgemcmoicmgaqie[] = $eqwoegegiamegqsm->megqywqeuquawkim(Constants::kiwgokskimawckie, $ogaeiucyqmowuqms); qoqskyuuwueqkquk: $jwcssmswmaeskgam = (array) $this->iekyeyicoyyawomk()->oqomcmyuuakigusk($gqgemcmoicmgaqie); iwsuawwqomaowuii: return $jwcssmswmaeskgam; } public function maaqyamqwsosocii($qamwkmomamooqqic, $iueymcwwscwqkiyq = Constants::eqewsqmqmsiocaeg, $ogaeiucyqmowuqms = null) : bool { return !empty($this->qcgwasumiaaemeei($qamwkmomamooqqic, $iueymcwwscwqkiyq, $ogaeiucyqmowuqms)); } public function uikgwcuascgeissw($mksyucucyswaukig) : ?string { $qamwkmomamooqqic = parent::uikgwcuascgeissw($mksyucucyswaukig); $gesuaewsacmmwoeo = $this->uykissogmuaaocsg()->esqsaiqmmsyymoea()->uikgwcuascgeissw($this->waecsyqmwascmqoa($mksyucucyswaukig, Constants::kiwgokskimawckie)); if (!empty($gesuaewsacmmwoeo)) { goto wcugqegqsuuuwqao; } $gesuaewsacmmwoeo = __("\x63\141\x6e\40\x6e\157\x74\40\x66\x69\x6e\144\x20\x70\154\x61\156\54\40\155\x61\x79\x62\x65\x20\x64\145\x6c\145\x74\145\144\56", PR__CMN__SUBSCRIPTION); wcugqegqsuuuwqao: return sprintf("\45\x73\x20\x2d\40\45\163", $gesuaewsacmmwoeo, $qamwkmomamooqqic); } public function scmmymqkoyckgkam($aokagokqyuysuksm, $icwicymcioeyeyek) { $this->ewcsyqaaigkicgse("\x73\x75\x62\x73\x63\162\x69\160\164\x69\157\x6e\x5f\141\x66\164\x65\x72\x5f\x73\141\x76\145\137\163\x75\x62\x73\143\162\151\x70\164\151\157\x6e", $aokagokqyuysuksm, $icwicymcioeyeyek); } public function eumuoyykkouweiyi($aokagokqyuysuksm, $mksyucucyswaukig) { $this->ewcsyqaaigkicgse("\x73\165\142\163\x63\x72\151\160\164\x69\157\156\137\x61\x66\x74\145\x72\137\144\x65\x6c\x65\x74\145\137\163\x75\142\x73\x63\x72\x69\160\x74\x69\x6f\156", $aokagokqyuysuksm, $mksyucucyswaukig); } }
