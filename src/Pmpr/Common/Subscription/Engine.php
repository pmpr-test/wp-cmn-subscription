<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f7da0ef0271             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Subscription; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Subscription\Model\Usage; use Pmpr\Common\Subscription\Model\Extra; use Pmpr\Common\Subscription\Model\Plan; use Pmpr\Common\Subscription\Model\Subscription; use WC_Coupon; use WC_Order_Item_Product; use WC_Product; use WC_Product_Variable; use WC_Product_Variation; use WP_Error; use WP_User; abstract class Engine extends Container { public function aackauiyyagmeqso(bool $gmcgeogogyqsgawk = false) : array { return $this->esqsaiqmmsyymoea()->qyaiiayimwmuomey($gmcgeogogyqsgawk); } public function giweasosqeiqeeqg() { return $this->weysguygiseoukqw(Setting::ysogiyumowssousm, 0); } public function cqgykysyamsccuyi() { return $this->weysguygiseoukqw(Setting::wsmyqwsuasaowuqg, 0); } public function ycmmosmyyiycyeug(bool $gmcgeogogyqsgawk = false) : array { $ksaameoqigiaoigg = []; $eoaogeociwkwuwgs = $this->giweasosqeiqeeqg(); $oymcauiugwyscqgs = $this->weysguygiseoukqw(Setting::wsmyqwsuasaowuqg, 0); if (!($eoaogeociwkwuwgs && $oymcauiugwyscqgs)) { goto asmecuqiyyswueqe; } $qecuekqmeaiykeek = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->kaugocgyckysqucm($eoaogeociwkwuwgs, Constants::ckmqoekmugkggeym); if (!$qecuekqmeaiykeek) { goto myoicgcuugciueis; } if ($gmcgeogogyqsgawk) { goto qgoiooayqmqqsiok; } $ksaameoqigiaoigg = $qecuekqmeaiykeek; goto qwigomakwmyiwkgo; qgoiooayqmqqsiok: foreach ($qecuekqmeaiykeek as $isweyuoisomqyaag) { if (!($qsqwqsymmqeoqwcu = $this->mcwgysaowamqkcsc($isweyuoisomqyaag, $oymcauiugwyscqgs))) { goto qogqewiwmwiwskgm; } $ksaameoqigiaoigg[] = $qsqwqsymmqeoqwcu; qogqewiwmwiwskgm: qiaqsassksqiuyae: } cecuyayqoioasumi: qwigomakwmyiwkgo: myoicgcuugciueis: asmecuqiyyswueqe: return $ksaameoqigiaoigg; } public function mcwgysaowamqkcsc($isweyuoisomqyaag, $oymcauiugwyscqgs) : array { $qsqwqsymmqeoqwcu = []; if (!$isweyuoisomqyaag instanceof WC_Product_Variation) { goto cuykwgmswkskqkyi; } $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $ckkqcoeeekoowmok = $usmsssmiougymckk->iooowgsqoyqseyuu($isweyuoisomqyaag); if (!($oggygmyiawqsyecy = $this->gsmygqkksqsseoeq())) { goto csscmcacoikwsecs; } $oggygmyiawqsyecy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\x73\164\145\160" => 4, "\164\x61\162\x67\x65\164" => $ckkqcoeeekoowmok, "\157\162\144\x65\162\137\164\171\x70\x65" => "\145\x78\x74\162\x61"], $oggygmyiawqsyecy); csscmcacoikwsecs: $qsqwqsymmqeoqwcu = [Constants::gouqcwikiiygyasc => $ckkqcoeeekoowmok, Constants::acymsykymkiewqsy => $usmsssmiougymckk->owuaywucuaiyocum($isweyuoisomqyaag), Constants::qescuiwgsyuikume => $usmsssmiougymckk->waecsyqmwascmqoa($isweyuoisomqyaag, $oymcauiugwyscqgs), Constants::ueasagmikqewqcay => $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($usmsssmiougymckk->owuaywucuaiyocum($isweyuoisomqyaag)), Constants::iikosyqiawkweouo => $usmsssmiougymckk->ccekeuwwqqoiwuwy($isweyuoisomqyaag), Constants::gsmygaomsmmwieku => $usmsssmiougymckk->ykeiaeskegyyeoau($isweyuoisomqyaag), Constants::iysgkeueasmuwmcq => $oggygmyiawqsyecy]; cuykwgmswkskqkyi: return $qsqwqsymmqeoqwcu; } public function sosokoyeikoyqeqy() : array { $aeqcomiyowaiwgyg = []; if (!($kekgkgqeyesmkywu = $this->aackauiyyagmeqso())) { goto sciwggaeogcoesiu; } $omouioamescuegke = $this->esqsaiqmmsyymoea(); foreach ($kekgkgqeyesmkywu as $gesuaewsacmmwoeo) { $aeqcomiyowaiwgyg[$omouioamescuegke->keeuqgyooycqoygw($gesuaewsacmmwoeo)] = $this->ikacayyusswgaoeg($gesuaewsacmmwoeo); mkwskuycuyguqqok: } kuicqywysciceggs: sciwggaeogcoesiu: return $aeqcomiyowaiwgyg; } public function qsgsmeykqoqkmywq(array $ekuqiqmikiicgoss) : string { return (string) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ekuqiqmikiicgoss, Constants::cwuyiqcqccegmmis, Constants::kqesaikwiwcgimuk); } public function kgmkyususkuskmws(array $ekuqiqmikiicgoss) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ekuqiqmikiicgoss, Constants::ecygggyugmmoeaky); } public function ucqceiamukugecuu($cusggmuosggikeas, $smowyuyseuwiaiei) : array { return [Constants::ciywsqoeiymemsys => Constants::uasuowkaguiwoouw, Constants::mayesweykoooyugy => [], Constants::eoigaocgcaekssuw => [Constants::gouqcwikiiygyasc => 0, Constants::ciyoccqkiamemcmm => 0]]; } public function iimacqcwqcucqcwo($cusggmuosggikeas, $smowyuyseuwiaiei, string $iueymcwwscwqkiyq = Constants::amcogigwsaqssuai) : array { $ksaameoqigiaoigg = []; if (!($smowyuyseuwiaiei > 0)) { goto sqiciiuwmykocycc; } $ymkqyawksmqcgsei = $this->ucqceiamukugecuu($cusggmuosggikeas, $smowyuyseuwiaiei); if (!(Constants::gymusgeumuwomwuy === $ymkqyawksmqcgsei[Constants::ciywsqoeiymemsys])) { goto iomcaiwewsawiamu; } if (!($ymkqyawksmqcgsei[Constants::eoigaocgcaekssuw][Constants::gouqcwikiiygyasc] > 0 && $ymkqyawksmqcgsei[Constants::eoigaocgcaekssuw][Constants::ciyoccqkiamemcmm] > 0)) { goto eqkauqciwewmgeoi; } $ksaameoqigiaoigg[] = $this->skkysuqqysioiwwg(Constants::eoigaocgcaekssuw, $ymkqyawksmqcgsei[Constants::eoigaocgcaekssuw][Constants::gouqcwikiiygyasc], $ymkqyawksmqcgsei[Constants::eoigaocgcaekssuw][Constants::ciyoccqkiamemcmm], $iueymcwwscwqkiyq); eqkauqciwewmgeoi: if (!(!empty($ymkqyawksmqcgsei[Constants::mayesweykoooyugy]) && is_array($ymkqyawksmqcgsei[Constants::mayesweykoooyugy]))) { goto kiqogmwcgcamwiig; } foreach ($ymkqyawksmqcgsei[Constants::mayesweykoooyugy] as $qguauucmeiywiaue => $eqgoocgaqwqcimie) { $ksaameoqigiaoigg[] = $this->skkysuqqysioiwwg(Constants::mayesweykoooyugy, $qguauucmeiywiaue, $eqgoocgaqwqcimie, $iueymcwwscwqkiyq); yowsmsiyimmimemc: } kwagwqyusyiyoaqs: kiqogmwcgcamwiig: iomcaiwewsawiamu: sqiciiuwmykocycc: return array_filter($ksaameoqigiaoigg); } public function ysqwckqmysqyuuow($wwcmeousycqgqwws, string $iueymcwwscwqkiyq) : array { return $this->uaikmqggwqeiigwe()->wqikesawekycweoi($wwcmeousycqgqwws, [Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq]); } public function skkysuqqysioiwwg($iakkeikwceeomgyq, $gykmkugsiwyssqis, int $smowyuyseuwiaiei, string $iueymcwwscwqkiyq = Constants::amcogigwsaqssuai) : int { $sogksuscggsicmac = $this->uaikmqggwqeiigwe()->gscuuyuyauokoyuo([Constants::ciyoccqkiamemcmm => $smowyuyseuwiaiei, Constants::igecewwoemccgwsq => $iakkeikwceeomgyq, Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq, Constants::yocqkmeouaamomke => $gykmkugsiwyssqis]); return isset($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) && $sogksuscggsicmac[Constants::ckcawaoawwioqecq] ? $sogksuscggsicmac[Constants::gouqcwikiiygyasc] : 0; } public function mkiwiwaquqeegaik($qamwkmomamooqqic, $iueymcwwscwqkiyq = Constants::eqewsqmqmsiocaeg) : ?array { $umwagewoweuckiso = null; if (!$qamwkmomamooqqic) { goto uukumskkeggaowck; } if (!$qamwkmomamooqqic instanceof WP_User) { goto eequksumcoogyoem; } $qamwkmomamooqqic = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($qamwkmomamooqqic, true); eequksumcoogyoem: $umwagewoweuckiso = $this->ucugmoqeawkymskk()->qcgwasumiaaemeei($qamwkmomamooqqic, $iueymcwwscwqkiyq); uukumskkeggaowck: return $umwagewoweuckiso; } public function osqasmaiqokeemqy($cusggmuosggikeas = false, bool $gmcgeogogyqsgawk = false) : ?array { static $kekgkgqeyesmkywu; $gesuaewsacmmwoeo = null; if (!$cusggmuosggikeas) { goto egasokooagakisiy; } if (!$cusggmuosggikeas instanceof WP_User) { goto cggowoquuiwqkyew; } $cusggmuosggikeas = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($cusggmuosggikeas, true); cggowoquuiwqkyew: if (isset($kekgkgqeyesmkywu[$cusggmuosggikeas])) { goto usqgaogkqgemuima; } if (!$cusggmuosggikeas) { goto wcesymwqykqoyuqk; } $omouioamescuegke = $this->esqsaiqmmsyymoea(); $omcwcsgeyeyoiwyi = $this->ucugmoqeawkymskk(); if (!($umwagewoweuckiso = $omcwcsgeyeyoiwyi->qcgwasumiaaemeei($cusggmuosggikeas))) { goto meawswgwagoqgkye; } $giuuywmgueegiiay = $omcwcsgeyeyoiwyi->qogaqkcsogcqiaic($umwagewoweuckiso, Constants::kiwgokskimawckie); if (!$giuuywmgueegiiay) { goto goacqqsgaaigyuaw; } $gesuaewsacmmwoeo = $omouioamescuegke->akkkoiiymmamsauc($giuuywmgueegiiay); if ($gmcgeogogyqsgawk) { goto ocokwuuquaokmasc; } $gesuaewsacmmwoeo = (array) $gesuaewsacmmwoeo; goto yiwiqaqmwiogawym; ocokwuuquaokmasc: $gesuaewsacmmwoeo = $omouioamescuegke->scqakcemaqsqkema($gesuaewsacmmwoeo); yiwiqaqmwiogawym: $gesuaewsacmmwoeo[Constants::uikygkewwaiowmwe] = $omcwcsgeyeyoiwyi->qogaqkcsogcqiaic($umwagewoweuckiso, Constants::icymuyeowqaciyyu); goacqqsgaaigyuaw: meawswgwagoqgkye: wcesymwqykqoyuqk: $kekgkgqeyesmkywu[$cusggmuosggikeas] = $gesuaewsacmmwoeo; goto mswsoaimesegiiic; usqgaogkqgemuima: $gesuaewsacmmwoeo = $kekgkgqeyesmkywu[$cusggmuosggikeas]; mswsoaimesegiiic: egasokooagakisiy: return $gesuaewsacmmwoeo; } public function subscribe($cusggmuosggikeas, $gesuaewsacmmwoeo, array $msameyekicqaquew = []) { if (!$this->aiiaaeioukuaiuok($cusggmuosggikeas)) { goto eiawsoasmscmqswa; } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\101\x6c\x72\x65\x61\x64\x79\x20\123\x75\x62\x73\143\162\151\x62\x65\144\56", PR__MDL__OPTIMIZATION)); goto ickcmqoiosquugwe; eiawsoasmscmqswa: $omouioamescuegke = $this->esqsaiqmmsyymoea(); $omcwcsgeyeyoiwyi = $this->ucugmoqeawkymskk(); if ($ogaeiucyqmowuqms = $omouioamescuegke->keeuqgyooycqoygw($gesuaewsacmmwoeo)) { goto qmiwsequckckoaei; } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\120\x6c\141\x6e\40\151\144\x20\143\141\156\40\156\157\x74\x20\142\145\40\x72\145\164\x72\151\x65\x76\145\x64\56", PR__MDL__OPTIMIZATION)); goto goeoymmqqqeeoime; qmiwsequckckoaei: $icwicymcioeyeyek = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($msameyekicqaquew, [Constants::kiwgokskimawckie => $ogaeiucyqmowuqms, Constants::ciywsqoeiymemsys => Constants::eqewsqmqmsiocaeg, Constants::icymuyeowqaciyyu => $omouioamescuegke->cskqgsqgkquceimo($gesuaewsacmmwoeo, Constants::kumuoysauoagaiiy), Constants::kuqwimiimiqsimgo => $cusggmuosggikeas]); $sogksuscggsicmac = $omcwcsgeyeyoiwyi->gscuuyuyauokoyuo($icwicymcioeyeyek); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { goto kecwuwwcwokuksyq; } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($sogksuscggsicmac[Constants::iwyueouqaqegmcas])); goto qgegkeomwscwwiuw; kecwuwwcwokuksyq: $ksaameoqigiaoigg = $sogksuscggsicmac[Constants::iikosyqiawkweouo]; qgegkeomwscwwiuw: goeoymmqqqeeoime: ickcmqoiosquugwe: return $ksaameoqigiaoigg; } public function ccmqmqukumguweeu($cusggmuosggikeas, $smowyuyseuwiaiei, array $msameyekicqaquew = []) { $icwicymcioeyeyek = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw([Constants::ciyoccqkiamemcmm => (int) $smowyuyseuwiaiei, Constants::kuqwimiimiqsimgo => $cusggmuosggikeas], $msameyekicqaquew); $sogksuscggsicmac = $this->oisakkmieamkammc()->gscuuyuyauokoyuo($icwicymcioeyeyek); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { goto qmeoaqmsuseueqiy; } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($sogksuscggsicmac[Constants::iwyueouqaqegmcas])); goto ygkcacsyyckescqs; qmeoaqmsuseueqiy: $ksaameoqigiaoigg = $sogksuscggsicmac[Constants::iikosyqiawkweouo]; ygkcacsyyckescqs: return $ksaameoqigiaoigg; } public function kcaaccuueqiwameg($cusggmuosggikeas) { $sogksuscggsicmac = true; if ($this->aiiaaeioukuaiuok($cusggmuosggikeas)) { goto cuoqqgaygogsmmic; } $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\45\x73\40\x6d\165\163\x74\x20\x73\165\x62\x73\x63\x72\151\x62\x65\x20\146\151\162\x73\164\x2e", PR__CMN__SUBSCRIPTION), $this->ogkiouuqqmaagscs($cusggmuosggikeas))); cuoqqgaygogsmmic: return $sogksuscggsicmac; } public function eueeumkwymsyoacq($qamwkmomamooqqic, $ogaeiucyqmowuqms) { $sogksuscggsicmac = true; $agaucoqciakcuwkc = $this->ucugmoqeawkymskk()->qogaqkcsogcqiaic($this->mkiwiwaquqeegaik($qamwkmomamooqqic), Constants::kiwgokskimawckie); $akqaumomesyiuiym = $this->imicysmecoiycoqc(); if (!($agaucoqciakcuwkc && ($agaucoqciakcuwkc !== $akqaumomesyiuiym || $ogaeiucyqmowuqms === $akqaumomesyiuiym))) { goto cgewcsueoyaeikgm; } $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($this->weysguygiseoukqw(Setting::uckosuiscwyyimgc, '')); cgewcsueoyaeikgm: return $sogksuscggsicmac; } public function aiiaaeioukuaiuok($qamwkmomamooqqic = null) : bool { if (!(null === $qamwkmomamooqqic)) { goto sukskmcwsoysiuqu; } $qamwkmomamooqqic = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->qyeguewwsmosqcwc(); sukskmcwsoysiuqu: return $this->ucugmoqeawkymskk()->maaqyamqwsosocii($qamwkmomamooqqic); } public function megowgmouaekgmuc(array $ywmkwiwkosakssii = []) { $uiwkaimiaukoeymk = []; if (!($kekgkgqeyesmkywu = $this->aackauiyyagmeqso())) { goto twkmiuomimomscew; } foreach ($kekgkgqeyesmkywu as $gesuaewsacmmwoeo) { if (!($uiwkaimiaukoeymk = $this->cmckygykskumaqqq($gesuaewsacmmwoeo, $ywmkwiwkosakssii))) { goto eyiamcekkgkiawqy; } goto igymseewwyiocoug; eyiamcekkgkiawqy: mqccmesakuemceqi: } igymseewwyiocoug: twkmiuomimomscew: return $uiwkaimiaukoeymk; } public function mcgwiiiuwoqaueqs($kqekumyckgkmomos) : bool { $weksiguqgqscsoee = false; foreach ($this->aackauiyyagmeqso() as $gesuaewsacmmwoeo) { $aeqcomiyowaiwgyg = $this->ikacayyusswgaoeg($gesuaewsacmmwoeo); if (!($aeqcomiyowaiwgyg && isset($aeqcomiyowaiwgyg[$kqekumyckgkmomos]))) { goto qcessicwuikwqsis; } $weksiguqgqscsoee = true; goto kooskuwkuayiuose; qcessicwuikwqsis: qwcegcuowwgiccos: } kooskuwkuayiuose: return $weksiguqgqscsoee; } public function ikacayyusswgaoeg($gesuaewsacmmwoeo) : array { $aeqcomiyowaiwgyg = []; if (!($acqqmqmcquukaqsc = $this->esqsaiqmmsyymoea()->qogaqkcsogcqiaic($gesuaewsacmmwoeo, Constants::eeeoygaqqmoukaeg, []))) { goto siqagquguiemuoku; } foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { if (!(Constants::uueoqmeyyeiqyuku === $this->qsgsmeykqoqkmywq($ekuqiqmikiicgoss))) { goto coywmiyqgsweuiic; } $aeqcomiyowaiwgyg[$this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ekuqiqmikiicgoss, Constants::wqewegwyaeueiyae, 0)] = $ekuqiqmikiicgoss; coywmiyqgsweuiic: ieumumsgyguceusy: } yssscwioiyygssec: siqagquguiemuoku: return $aeqcomiyowaiwgyg; } public function giecsykqamiookgq($product) : bool { $giecsykqamiookgq = false; if (!$product) { goto oouoqimaaqcmccay; } $eoaogeociwkwuwgs = $this->weysguygiseoukqw(Setting::ysogiyumowssousm, 0); if (!$eoaogeociwkwuwgs) { goto ycakugokkqkuqyiu; } $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $giecsykqamiookgq = $usmsssmiougymckk->iooowgsqoyqseyuu($product) == $eoaogeociwkwuwgs || $usmsssmiougymckk->qqiwsumoyiukmgco($product) === $eoaogeociwkwuwgs; ycakugokkqkuqyiu: oouoqimaaqcmccay: return $giecsykqamiookgq; } public function cuisyayqcsoqcueq($product) : bool { $cuisyayqcsoqcueq = false; if (!$product) { goto sycygoiaiqqageym; } $cuisyayqcsoqcueq = in_array($this->caokeucsksukesyo()->aqasygcsqysmmyke()->iooowgsqoyqseyuu($product), $this->esqsaiqmmsyymoea()->ciygeaymmyosikog()); sycygoiaiqqageym: return $cuisyayqcsoqcueq; } public function koeimwecyiiqgesk($qamwkmomamooqqic = false, array $ywmkwiwkosakssii = []) { $gwykaiwqgaycyggs = true; if (!$this->ymiqwioiwckiymgg($qamwkmomamooqqic, $ywmkwiwkosakssii)) { goto gimmuoqwckiseaik; } $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\102\171\x70\x61\163\x73\x20\142\171\x20\163\157\x6d\x65\x20\x63\157\x6e\x64\151\x74\151\x6f\156\163\x2e"); goto cmqucgoewuyieoyk; gimmuoqwckiseaik: if ($kekgkgqeyesmkywu = $this->aackauiyyagmeqso()) { goto quwcqmyokicssyew; } $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\160\x6c\141\x6e\163\x20\154\151\163\164\40\151\x73\x20\x65\155\160\x74\171\x2e"); goto iqcogmsguwoikame; quwcqmyokicssyew: $omouioamescuegke = $this->esqsaiqmmsyymoea(); $gsqqgiwygsqmagmu = $this->osqasmaiqokeemqy($qamwkmomamooqqic); foreach ($kekgkgqeyesmkywu as $gesuaewsacmmwoeo) { if ($uiwkaimiaukoeymk = $this->cmckygykskumaqqq($gesuaewsacmmwoeo, $ywmkwiwkosakssii)) { goto umgaesggesswoaqe; } $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug(sprintf("\143\141\156\40\x6e\x6f\x74\x20\146\151\x6e\144\x20\141\x6e\171\40\162\x75\154\x65\x20\x74\x6f\x20\x6d\x61\164\143\150\x20\x74\x68\x69\163\x20\x63\x6f\156\164\145\x6e\164\x20\151\x6e\40\x70\154\x61\156\x20\x25\x73\x2e", $omouioamescuegke->keeuqgyooycqoygw($gesuaewsacmmwoeo))); goto qsygcycwieukkgwc; umgaesggesswoaqe: if (!($gsqqgiwygsqmagmu && (int) $omouioamescuegke->keeuqgyooycqoygw($gesuaewsacmmwoeo) === (int) $omouioamescuegke->keeuqgyooycqoygw($gsqqgiwygsqmagmu))) { goto wwkgkaecgiwggcck; } $gwykaiwqgaycyggs = $uiwkaimiaukoeymk; $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x55\x73\x65\x72\x20\163\x75\x62\x73\x63\x72\x69\x62\x65\x64\40\x61\x6e\x64\x20\x68\x61\163\40\141\x63\143\x65\163\x73\x20\x74\x6f\x20\x73\x65\x65\40\x74\150\x69\x73\x20\x63\157\156\164\145\156\164\56"); goto gygawoqywkukmqee; wwkgkaecgiwggcck: $gwykaiwqgaycyggs = false; qsygcycwieukkgwc: kciouyuaqkyqomam: } gygawoqywkukmqee: if ($gwykaiwqgaycyggs) { goto kiwqkcaekqqyuegq; } $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\165\x73\x65\x72\40\x68\141\x73\40\156\157\x74\x20\141\x63\143\145\163\163\x20\164\157\40\163\145\x65\x20\x74\150\151\x73\40\x63\x6f\156\164\145\156\x74\x2e"); kiwqkcaekqqyuegq: iqcogmsguwoikame: cmqucgoewuyieoyk: $sogksuscggsicmac = $this->ocksiywmkyaqseou("{$this->aakmagwggmkoiiyu()}\x5f\x73\x75\x62\163\143\162\151\160\164\x69\157\x6e\x5f\143\150\145\x63\x6b\x5f\x61\143\x63\145\x73\x73\137\162\145\x73\165\x6c\x74", $gwykaiwqgaycyggs, $qamwkmomamooqqic, $ywmkwiwkosakssii, $this); if (!(!$gwykaiwqgaycyggs && $sogksuscggsicmac)) { goto yqykqysmiquwoasu; } $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\106\151\x6c\164\x65\162\40\147\x69\x76\x65\x20\141\x63\x63\145\163\x73\x20\164\157\x20\165\x73\145\162\56"); yqykqysmiquwoasu: return $sogksuscggsicmac; } public function cmckygykskumaqqq($gesuaewsacmmwoeo, array $ywmkwiwkosakssii = []) : array { $omouioamescuegke = $this->esqsaiqmmsyymoea(); $uiwkaimiaukoeymk = []; if (!($acqqmqmcquukaqsc = $omouioamescuegke->qogaqkcsogcqiaic($gesuaewsacmmwoeo, Constants::eeeoygaqqmoukaeg))) { goto ssoucoucsgccekwe; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::mgsccwumkcawaqcy => false, Constants::cwuyiqcqccegmmis => false]); $ccamueccusigaaio = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::mgsccwumkcawaqcy); $oqiawgmgsmuwyqkw = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::cwuyiqcqccegmmis); foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $couuyeucwooyseic = $this->qsgsmeykqoqkmywq($ekuqiqmikiicgoss); if (!($oqiawgmgsmuwyqkw && $oqiawgmgsmuwyqkw !== $couuyeucwooyseic)) { goto omugkkesagcyagmk; } goto mosqsmqimqgqoase; omugkkesagcyagmk: if (Constants::uueoqmeyyeiqyuku === $couuyeucwooyseic) { goto ygcsmkuycoagwyou; } $ockekyouswmoccck = $this->skwookiukacyyaeo($couuyeucwooyseic, $ccamueccusigaaio, $ekuqiqmikiicgoss, $ywmkwiwkosakssii); goto kqksuugcgsyeoayy; ygcsmkuycoagwyou: $ockekyouswmoccck = $this->asiuuaqkuseoawmy($ccamueccusigaaio, $ekuqiqmikiicgoss); kqksuugcgsyeoayy: if (!$ockekyouswmoccck) { goto qqewoyookaskiuek; } if (!(Constants::ccyeycyyykwuymsy === $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, Constants::wuawcaggsyeaaswe, Constants::ackcaikowcokggsc))) { goto iggyqogweyosuikc; } $uiwkaimiaukoeymk = []; $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\164\150\151\163\x20\143\157\156\164\x65\156\x74\40\145\170\143\x6c\165\x64\145\x64\x20\x62\171\40\x72\165\x6c\x65\56"); goto ayyweymyuuiauamo; iggyqogweyosuikc: $uiwkaimiaukoeymk = $ekuqiqmikiicgoss; qqewoyookaskiuek: mosqsmqimqgqoase: } ayyweymyuuiauamo: ssoucoucsgccekwe: return $uiwkaimiaukoeymk; } public function asiuuaqkuseoawmy($kqekumyckgkmomos, array $ekuqiqmikiicgoss) : bool { $ackyuiceseoucyuw = false; if (!($kqekumyckgkmomos && Constants::uueoqmeyyeiqyuku === $this->qsgsmeykqoqkmywq($ekuqiqmikiicgoss))) { goto qkcyqocqqwmqgqww; } $ackyuiceseoucyuw = (int) $kqekumyckgkmomos === (int) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ekuqiqmikiicgoss, Constants::wqewegwyaeueiyae, 0); qkcyqocqqwmqgqww: return $ackyuiceseoucyuw; } public function ymiqwioiwckiymgg($mkucggyaiaukqoce, array $ywmkwiwkosakssii = []) : bool { return $this->ocksiywmkyaqseou("{$this->aakmagwggmkoiiyu()}\x5f\163\x75\x62\x73\x63\x72\x69\x70\x74\x69\157\156\x5f\x63\x68\145\143\153\137\141\x63\143\145\x73\x73\137\x62\171\x70\x61\163\163", false, $mkucggyaiaukqoce, $ywmkwiwkosakssii, $this); } public function ucygcmiuugoemkeo($oammesyieqmwuwyi) : bool { $skksumsyamssouqc = false; if (!(is_array($oammesyieqmwuwyi) && $oammesyieqmwuwyi)) { goto wmmggowmigekyoso; } $aqauykcugwiqkumq = $this->caokeucsksukesyo()->mmmcswscsiecscwg(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!($igqsaukqcqscimok instanceof WC_Product && $this->cuisyayqcsoqcueq($igqsaukqcqscimok) || $this->cuisyayqcsoqcueq($aqauykcugwiqkumq->scwwywwaeuumakiq($igqsaukqcqscimok)))) { goto ywqgcegomwaiuquc; } $skksumsyamssouqc = true; goto miyqyeiwquwsacsm; ywqgcegomwaiuquc: eegqyykygiccaoeo: } miyqyeiwquwsacsm: wmmggowmigekyoso: return $skksumsyamssouqc; } public function kwegekgiyuciuqyw($gesuaewsacmmwoeo) : string { $wmaeussqmywkecka = []; $omouioamescuegke = $this->esqsaiqmmsyymoea(); if (!is_numeric($gesuaewsacmmwoeo)) { goto soqqemyioggmoakg; } $gesuaewsacmmwoeo = $omouioamescuegke->akkkoiiymmamsauc($gesuaewsacmmwoeo); soqqemyioggmoakg: if (!(is_object($gesuaewsacmmwoeo) || is_array($gesuaewsacmmwoeo))) { goto oqugqwcyomiaaoqu; } $megmggkiokqkcwou = $omouioamescuegke->qogaqkcsogcqiaic($gesuaewsacmmwoeo, Constants::qscwcyiaqccoayqk, []); foreach ($megmggkiokqkcwou as $wiwcgykokegmceyk) { if (!($cmwygeyygwqaemaq = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wiwcgykokegmceyk, Constants::TEXT))) { goto eeqesooyqagwawae; } $wmaeussqmywkecka[] = $cmwygeyygwqaemaq; eeqesooyqagwawae: suswcqoyyqkkquuo: } acaqummmoyiemqss: oqugqwcyomiaaoqu: return $this->iuygowkemiiwqmiw("\x66\145\x61\164\x75\x72\145\x73", [Constants::qscwcyiaqccoayqk => $wmaeussqmywkecka], ["\x63\x6c\x61\163\x73" => __CLASS__]); } public function qkgmskycwcyagggm(string $uusmaiomayssaecw, ?string $cmwygeyygwqaemaq, array $wwgucssaecqekuek = []) : string { $wwgucssaecqekuek = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($wwgucssaecqekuek, ["\x68\162\145\146" => "\43", "\x63\x6c\141\163\x73" => "\142\x75\x74\x74\157\156", "\x61\162\151\141\x2d\154\141\x62\x65\x6c" => $cmwygeyygwqaemaq, Constants::qescuiwgsyuikume => $cmwygeyygwqaemaq]); $qookweymeqawmcwo = [Constants::ascagqcquwgmygkm => $uusmaiomayssaecw, Constants::TEXT => $cmwygeyygwqaemaq, Constants::ysskgssgwuwmqwym => $wwgucssaecqekuek]; $qookweymeqawmcwo = $this->ocksiywmkyaqseou("{$this->aakmagwggmkoiiyu()}\137\x73\165\142\163\x63\x72\x69\160\164\151\x6f\156\137\x61\x63\164\151\157\156\x5f\160\x61\x72\x61\x6d\x65\164\145\162\163", $qookweymeqawmcwo, $uusmaiomayssaecw); $qookweymeqawmcwo = $this->ocksiywmkyaqseou("{$this->aakmagwggmkoiiyu()}\x5f\163\165\142\x73\x63\162\x69\x70\x74\151\157\156\x5f{$uusmaiomayssaecw}\x5f\141\x63\164\151\x6f\156\137\160\x61\162\141\155\145\164\145\162\163", $qookweymeqawmcwo); return $this->iuygowkemiiwqmiw("\141\x63\164\x69\157\156", $qookweymeqawmcwo, ["\143\x6c\x61\x73\x73" => __CLASS__]); } public function wmsewmwmcaiioeyo($gesuaewsacmmwoeo, $cusggmuosggikeas, bool $igaomgqeiueaakmk = true) { $omouioamescuegke = $this->esqsaiqmmsyymoea(); if (Constants::eqewsqmqmsiocaeg === $omouioamescuegke->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $gesuaewsacmmwoeo)) { goto uguigkcmukuouway; } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x50\x6c\141\x6e\40\151\163\40\x6e\157\x74\x20\141\x63\164\x69\166\145\40\x72\151\x67\x68\x74\40\156\x6f\x77\x2c\40\160\154\x65\141\x73\x20\143\150\x6f\x69\143\145\40\141\x6e\x6f\164\150\145\162\x20\160\154\141\x6e\56", PR__CMN__SUBSCRIPTION)); goto uqqaiagaeqgqgaiy; uguigkcmukuouway: if ($umkkkaqkwugkemce = $omouioamescuegke->qogaqkcsogcqiaic($gesuaewsacmmwoeo, Constants::uecoocasykucckuu)) { goto usquiuuyiyqaeyiu; } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\120\154\x61\x6e\40\151\163\40\x6e\157\164\x20\x72\145\x61\x64\x79\x20\x74\157\40\141\144\x64\x20\164\x6f\x20\x63\x61\x72\164\54\x20\160\154\x65\x61\163\145\x20\143\x6f\156\164\141\x63\164\40\x75\163\x2e", PR__CMN__SUBSCRIPTION)); goto qicwaskssogcokgm; usquiuuyiyqaeyiu: if (!($igaomgqeiueaakmk && $this->aiiaaeioukuaiuok($cusggmuosggikeas))) { goto foeeqckqsyockkak; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($this->weysguygiseoukqw(Setting::uckosuiscwyyimgc, '')); foeeqckqsyockkak: $ekymkycgewkiouqe = $this->caokeucsksukesyo()->wikusamwomuogoau(); foreach ($ekymkycgewkiouqe->ygywcicqqwcumoku() as $igqsaukqcqscimok) { $product = $igqsaukqcqscimok[Constants::uiwqcumqkgikqyue] ?? null; if (!$this->cuisyayqcsoqcueq($product)) { goto kymkucucyeoeikim; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($this->weysguygiseoukqw(Setting::mimegqqmowgwyqsu, '')); kymkucucyeoeikim: hoeeyiowekaeemko: } iekumemscwieugqw: $ksaameoqigiaoigg = $umkkkaqkwugkemce; qicwaskssogcokgm: uqqaiagaeqgqgaiy: return $ksaameoqigiaoigg; } public function egsmaieicsomeyse(string $iiumgusgeekimkya, $qamwkmomamooqqic, string $ggauoeuaesiymgee = '') : string { $ksaameoqigiaoigg = ''; $uamcoiueqaamsqma = $this->weysguygiseoukqw($iiumgusgeekimkya, $ggauoeuaesiymgee); if ($uamcoiueqaamsqma) { goto esuiysskoweawsue; } $uamcoiueqaamsqma = $ggauoeuaesiymgee; esuiysskoweawsue: if (!($uamcoiueqaamsqma && $qamwkmomamooqqic)) { goto suqkuqygkkgwyaie; } $gsqqgiwygsqmagmu = $this->osqasmaiqokeemqy($qamwkmomamooqqic, true); if (!($gsqqgiwygsqmagmu && isset($gsqqgiwygsqmagmu[Constants::qescuiwgsyuikume], $gsqqgiwygsqmagmu[Constants::uikygkewwaiowmwe]))) { goto aegysmeecgcgayyw; } $meqocwsecsywiiqs = $gsqqgiwygsqmagmu[Constants::qescuiwgsyuikume]; if (!(isset($gsqqgiwygsqmagmu[Constants::quumookoiuysuyuw]) && $gsqqgiwygsqmagmu[Constants::quumookoiuysuyuw])) { goto gaomwagkcciesyqy; } $meqocwsecsywiiqs = $gsqqgiwygsqmagmu[Constants::quumookoiuysuyuw]; gaomwagkcciesyqy: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->owgcciayoweymuws()->qquwggyuqouqumam($uamcoiueqaamsqma, [Constants::sicsskuogummkkgi => $meqocwsecsywiiqs, Constants::gyusqcgoiwogaaoy => $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($gsqqgiwygsqmagmu[Constants::uikygkewwaiowmwe]), Constants::ugwaqgyaoewamgyc => $this->kwegekgiyuciuqyw($gsqqgiwygsqmagmu)]); $ksaameoqigiaoigg = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->aqiqkkuauegomyoi($ksaameoqigiaoigg); aegysmeecgcgayyw: suqkuqygkkgwyaie: return $ksaameoqigiaoigg; } public function ogkiouuqqmaagscs($cusggmuosggikeas = null) : ?string { $pkyyagewkiyckmwy = null; $cusggmuosggikeas = $this->eyymssiiosygicem($cusggmuosggikeas); if (!$cusggmuosggikeas instanceof WP_User) { goto soaccwqimeksgwiw; } $pkyyagewkiyckmwy = $this->caokeucsksukesyo()->issssuygyewuaswa()->ygwimyogyaqgumam($cusggmuosggikeas, Constants::cuyqkgecokgmcwqu, true); soaccwqimeksgwiw: return $pkyyagewkiyckmwy; } public function eyymssiiosygicem($cusggmuosggikeas = null) { if ($cusggmuosggikeas) { goto wiysogeqqwgioyka; } $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->qyeguewwsmosqcwc(); wiysogeqqwgioyka: return $this->caokeucsksukesyo()->issssuygyewuaswa()->get($cusggmuosggikeas); } public function cemugskuuywigaig($cawesmkieccckaae) { if ($cawesmkieccckaae instanceof WC_Order_Item_Product) { goto syiqkaasoueowwui; } if (is_array($cawesmkieccckaae)) { goto skkamseieeusycye; } $qamwkmomamooqqic = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->qyeguewwsmosqcwc(); goto cgiscsqwwgqqaeqi; skkamseieeusycye: $qamwkmomamooqqic = $cawesmkieccckaae[Constants::kuqwimiimiqsimgo] ?? 0; cgiscsqwwgqqaeqi: goto giaacoqqqsekcayy; syiqkaasoueowwui: $qamwkmomamooqqic = $cawesmkieccckaae->get_meta(Constants::kuqwimiimiqsimgo); giaacoqqqsekcayy: return $qamwkmomamooqqic; } public function imicysmecoiycoqc() : int { return (int) $this->weysguygiseoukqw(Setting::gccwqcewuysckgic, 0); } public abstract function aakmagwggmkoiiyu() : string; public abstract function esqsaiqmmsyymoea() : Plan; public abstract function uaikmqggwqeiigwe() : Usage; public abstract function oisakkmieamkammc() : Extra; public abstract function ucugmoqeawkymskk() : Subscription; public abstract function skwookiukacyyaeo($sqeykgyoooqysmca, $ccamueccusigaaio, array $ekuqiqmikiicgoss = [], array $ywmkwiwkosakssii = []) : bool; public abstract function gsmygqkksqsseoeq() : string; }
