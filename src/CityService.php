<?php

namespace Jenson\City;

use Jenson\City\Helper\DB;

class CityService
{

    public function AreaCode(){
        $data = '{"list":[{"city":"中国","code":"+86"},{"city":"香港特别行政区","code":"+852"},{"city":"澳门特别行政区","code":"+853"},{"city":"台湾","code":"+886"},{"city":"新加坡","code":"+65"},{"city":"阿富汗","code":"+93"},{"city":"阿尔巴尼亚","code":"+355"},{"city":"阿尔格拉","code":"+213"},{"city":"安道尔","code":"+376"},{"city":"安哥拉","code":"+244"},{"city":"安圭拉","code":"+1264"},{"city":"阿森松岛","code":"+247"},{"city":"安提瓜和巴布达","code":"+1268"},{"city":"阿根廷","code":"+54"},{"city":"亚美尼亚","code":"+374"},{"city":"阿鲁巴","code":"+297"},{"city":"澳大利亚","code":"+61"},{"city":"奥地利","code":"+43"},{"city":"阿塞拜疆","code":"+994"},{"city":"巴哈马","code":"+1242"},{"city":"巴林","code":"+973"},{"city":"孟加拉国","code":"+880"},{"city":"巴巴多斯","code":"+1246"},{"city":"白俄罗斯","code":"+375"},{"city":"比利时","code":"+32"},{"city":"伯利兹","code":"+501"},{"city":"贝宁","code":"+229"},{"city":"百慕大","code":"+1441"},{"city":"不丹","code":"+975"},{"city":"玻利维亚","code":"+591"},{"city":"波斯尼亚和黑塞哥维那","code":"+387"},{"city":"博茨瓦纳","code":"+267"},{"city":"巴西","code":"+55"},{"city":"文莱","code":"+673"},{"city":"保加利亚","code":"+359"},{"city":"布基纳法索","code":"+226"},{"city":"布隆迪","code":"+257"},{"city":"柬埔寨","code":"+855"},{"city":"喀麦隆","code":"+237"},{"city":"加拿大","code":"+1"},{"city":"佛得角","code":"+238"},{"city":"开曼群岛","code":"+1345"},{"city":"中非共和国","code":"+236"},{"city":"乍得","code":"+235"},{"city":"智利","code":"+56"},{"city":"哥伦比亚","code":"+57"},{"city":"科摩罗","code":"+269"},{"city":"刚果共和国","code":"+242"},{"city":"刚果民主共和国","code":"+243"},{"city":"库克群岛","code":"+682"},{"city":"哥斯达黎加","code":"+506"},{"city":"科特迪沃","code":"+225"},{"city":"克罗地亚","code":"+385"},{"city":"古巴","code":"+53"},{"city":"塞浦路斯","code":"+357"},{"city":"+捷克共和国","code":"+420"},{"city":"丹麦","code":"+45"},{"city":"吉布提","code":"+253"},{"city":"多米尼加","code":"+1767"},{"city":"多米尼加共和国","code":"+1809"},{"city":"厄瓜多尔","code":"+593"},{"city":"埃及","code":"+20"},{"city":"艾萨尔瓦多","code":"+503"},{"city":"爱沙尼亚","code":"+372"},{"city":"埃塞俄比亚","code":"+251"},{"city":"法罗群岛","code":"+298"},{"city":"斐济","code":"+679"},{"city":"芬兰","code":"+358"},{"city":"法国","code":"+33"},{"city":"法属圭亚那","code":"+594"},{"city":"法属波利尼西亚","code":"+689"},{"city":"加蓬","code":"+241"},{"city":"冈比亚","code":"+220"},{"city":"格鲁吉亚","code":"+995"},{"city":"德国","code":"+94"},{"city":"加纳","code":"+233"},{"city":"直布罗陀","code":"+350"},{"city":"希腊","code":"+30"},{"city":"格陵兰","code":"+299"},{"city":"格林纳达","code":"+1473"},{"city":"瓜德罗普","code":"+590"},{"city":"关岛","code":"+1671"},{"city":"危地马拉","code":"+502"},{"city":"几内亚","code":"+240"},{"city":"根西","code":"+44"},{"city":"几内亚","code":"+224"},{"city":"圭亚那","code":"+592"},{"city":"海地","code":"+509"},{"city":"洪都拉斯","code":"+504"},{"city":"缅甸","code":"+95"},{"city":"匈牙利","code":"+36"},{"city":"冰岛","code":"+354"},{"city":"印度","code":"+91"},{"city":"印度尼西亚","code":"+62"},{"city":"伊朗","code":"+98"},{"city":"伊拉克","code":"+964"},{"city":"爱尔兰","code":"+353"},{"city":"马恩岛","code":"+44"},{"city":"以色列","code":"+972"},{"city":"意大利","code":"+93"},{"city":"牙买加","code":"+1876"},{"city":"日本","code":"+81"},{"city":"泽西岛","code":"+44"},{"city":"约旦","code":"+962"},{"city":"哈萨克斯坦","code":"+7"},{"city":"肯尼亚","code":"+254"},{"city":"科索沃","code":"+383"},{"city":"科威特","code":"+965"},{"city":"吉尔吉斯斯坦","code":"+996"},{"city":"老挝","code":"+856"},{"city":"拉脱维亚","code":"+371"},{"city":"黎巴嫩","code":"+961"},{"city":"莱索托","code":"+266"},{"city":"利比里亚","code":"+231"},{"city":"利比亚","code":"+218"},{"city":"列支敦士登","code":"+423"},{"city":"立陶宛","code":"+370"},{"city":"卢森堡","code":"+352"},{"city":"马其顿","code":"+389"},{"city":"马达加斯加","code":"+261"},{"city":"马拉维","code":"+265"},{"city":"马来西亚","code":"+60"},{"city":"马尔代夫","code":"+960"},{"city":"马里","code":"+223"},{"city":"马耳他","code":"+356"},{"city":"马提尼克","code":"+596"},{"city":"毛里塔尼亚","code":"+222"},{"city":"毛里求斯","code":"+230"},{"city":"马约特","code":"+262"},{"city":"墨西哥","code":"+52"},{"city":"摩尔多瓦","code":"+373"},{"city":"摩纳哥","code":"+377"},{"city":"蒙古","code":"+976"},{"city":"黑山","code":"+382"},{"city":"蒙特塞拉特","code":"+1664"},{"city":"摩洛哥","code":"+212"},{"city":"莫桑比克","code":"+258"},{"city":"纳米比亚","code":"+264"},{"city":"尼泊尔","code":"+977"},{"city":"荷兰","code":"+31"},{"city":"荷属安的列斯","code":"+599"},{"city":"新喀里多尼亚","code":"+687"},{"city":"新西兰","code":"+64"},{"city":"尼加拉瓜","code":"+505"},{"city":"尼日尔","code":"+227"},{"city":"尼日利亚","code":"+234"},{"city":"挪威","code":"+47"},{"city":"阿曼","code":"+968"},{"city":"巴基斯坦","code":"+92"},{"city":"巴勒斯坦","code":"+970"},{"city":"巴拿马","code":"+507"},{"city":"巴布亚新几内亚","code":"+675"},{"city":"巴拉圭","code":"+595"},{"city":"秘鲁","code":"+51"},{"city":"菲律宾","code":"+63"},{"city":"波兰","code":"+48"},{"city":"葡萄牙","code":"+351"},{"city":"波多黎各","code":"+1"},{"city":"库塔","code":"+974"},{"city":"留尼汪","code":"+262"},{"city":"罗马尼亚","code":"+40"},{"city":"俄罗斯","code":"+7"},{"city":"卢旺达","code":"+250"},{"city":"萨摩亚东部","code":"+684"},{"city":"萨摩亚西部","code":"+685"},{"city":"圣马力诺","code":"+378"},{"city":"圣多美和普林西比","code":"+239"},{"city":"沙特阿拉伯","code":"+966"},{"city":"塞内加尔","code":"+221"},{"city":"塞尔维亚","code":"+381"},{"city":"塞舌尔","code":"+248"},{"city":"塞拉利昂","code":"+232"},{"city":"斯洛伐克","code":"+421"},{"city":"斯洛文尼亚","code":"+386"},{"city":"南非","code":"+27"},{"city":"韩国","code":"+82"},{"city":"西班牙","code":"+34"},{"city":"斯里兰卡","code":"+94"},{"city":"圣基茨和尼维斯","code":"+1869"},{"city":"圣卢西亚","code":"+1758"},{"city":"圣文森特","code":"+1784"},{"city":"苏丹","code":"+249"},{"city":"苏里南","code":"+597"},{"city":"斯威士兰","code":"+268"},{"city":"瑞典","code":"+46"},{"city":"瑞士","code":"+41"},{"city":"叙利亚","code":"+963"},{"city":"塔吉克斯坦","code":"+992"},{"city":"坦桑尼亚","code":"+255"},{"city":"泰国","code":"+66"},{"city":"东帝汶","code":"+670"},{"city":"多哥","code":"+228"},{"city":"汤加","code":"+676"},{"city":"特立尼达和多巴哥","code":"+1868"},{"city":"突尼斯","code":"+216"},{"city":"土耳其","code":"+90"},{"city":"土库曼斯坦","code":"+993"},{"city":"特克斯和凯科斯群岛","code":"+1649"},{"city":"乌干达","code":"+256"},{"city":"乌克兰","code":"+380"},{"city":"阿拉伯联合酋长国","code":"+971"},{"city":"英国","code":"+44"},{"city":"美国","code":"+1"},{"city":"乌拉圭","code":"+598"},{"city":"乌兹别克斯坦","code":"+998"},{"city":"瓦努阿图","code":"+678"},{"city":"委内瑞拉","code":"+58"},{"city":"越南","code":"+84"},{"city":"维尔京群岛","code":"+1340"},{"city":"也门","code":"+967"},{"city":"赞比亚","code":"+260"},{"city":"津巴布韦","code":"+263"}]}';
        return json_decode($data,1);
    }
    public $table = 'area';

    /**
     * 构造函数
     *
     * @param $table
     */
    public function __construct($table = null)
    {
        if(!empty($table)){
            $this->table = $table;
        }
    }
    /**
     * 获取城市简称
     *
     * @param $cityName
     * @return mixed
     */
    public  function getCityShortName($cityName = ''){
        $DB = new DB();
        $columns = ['id','name','short_name'];
        $where = [
            "parent_id" => 1
        ];
        if($cityName){
            $where["name[~]"] = $cityName;
        }
        $data =  $DB->database->select($this->table,$columns,$where);
        return $data;
    }

    /**
     * 获取城市信息
     *
     * @param $page
     * @param $page_size
     * @param $cityName
     * @return array|null
     */
    public function getCityAreaInfo($page = 1,$page_size = 10,$cityName = ''){
        $DB = new \Jenson\City\Helper\DB();
        $page = ($page-1) * $page_size;//数组以0起始
        $limit = $page_size;
        $columns = ['id','name','area_code','postal_code','parent_id','type'];
        $where = [
            'LIMIT'  => [$page , $limit],
        ];
        if($cityName){
            $where["name[~]"] = $cityName;
        }
        $data =  $DB->database->select($this->table,$columns,$where);
        return $data;
    }

    /**
     * 获取城市子分类（ALL todo：待优化）
     *
     * @param $page
     * @param $page_size
     * @param $cityName
     * @return array|null
     */
    public function getCitySubInfo($layer = 1,$cityName = "中国"){
        $DB = new \Jenson\City\Helper\DB();
        $columns = ['id','name','postal_code','short_name','parent_id','type','area_code'];
        $where = [
            'name'=>$cityName??'中国',
        ];
        $data =  $DB->database->get($this->table,$columns,$where);
        if(empty($data)){
            return '';
        }
        #z最多获取5层数据
        if($layer > 4){
            $layer = 4;
        }
        $where = [
            'parent_id' => $data['id']
        ];
        $sub = $DB->database->select($this->table,$columns,$where);
        #省份
        if(!empty($sub) && $layer >= 1)
            foreach ($sub as $k_sub => &$v_sub){
                $where1 = [
                    'parent_id' => $v_sub['id']
                ];
                $sub_sub =  $DB->database->select($this->table,$columns,$where1);
                if(!empty($sub_sub) && $layer >= 2){
                    $sub[$k_sub]['sub'] = $sub_sub;
                    #市
                    foreach ($sub_sub as $k_sub_sub => &$v_sub_sub){
                        $where2 = [
                            'parent_id' => $v_sub_sub['id']
                        ];
                        $sub_sub_sub =  $DB->database->select($this->table,$columns,$where2);
                        if(!empty($sub_sub_sub) && $layer >= 3){
                            $sub_sub[$k_sub_sub]['sub'] = $sub_sub_sub;
//                            #区/县
//                            foreach ($sub_sub_sub as $k_sub_sub_sub => &$v_sub_sub_sub){
//                                $where3 = [
//                                    'parent_id' => $v_sub_sub_sub['id']
//                                ];
//                                $sub_sub_sub_sub =  $DB->database->select($this->table,$columns,$where3);
//                                if(!empty($sub_sub_sub_sub)){
//                                    $sub_sub_sub[$k_sub_sub_sub]['sub'] = $sub_sub;
//                                }
//                            }
                        }
                    }
                }
            }{
            $data['sub'] = $sub;
        }
//        $where_sub = [
//            'parent_id'=>$data['id']
//        ];
//        $sub = $DB->database->select($this->table,$columns,$where_sub);
//        $data['sub'] = $sub;
        return $data;
    }

    public function getSubData($parent_id = 1,$columns = '*'){
        $where = [
            'parent_id' => $parent_id
        ];
        $DB = new \Jenson\City\Helper\DB();
        $sub = $DB->database->select($this->table, $columns, $where);
        $data = array();
        if($sub){
            $data = $sub;
        }
        return $data;
    }
}