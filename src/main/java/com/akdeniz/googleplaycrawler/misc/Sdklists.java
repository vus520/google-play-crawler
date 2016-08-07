package com.akdeniz.googleplaycrawler.misc;

import java.util.HashMap;

/**
 Created by shuhai on 16/8/7.
 API等级5：Android 2.0 Éclair
 API等级6：Android 2.0.1 Éclair
 API等级7：Android 2.1 Éclair
 API等级8：Android 2.2 - 2.2.3 Froyo
 API等级9：Android 2.3 - 2.3.2 Gingerbread
 API等级10：Android 2.3.3-2.3.7 Gingerbread
 API等级11：Android 3.0 Honeycomb
 API等级12：Android 3.1 Honeycomb
 API等级13：Android 3.2 Honeycomb
 API等级14：Android 4.0 - 4.0.2 Ice Cream Sandwich
 API等级15：Android 4.0.3 - 4.0.4 Ice Cream Sandwich
 API等级16：Android 4.1 Jelly Bean
 API等级17：Android 4.2 Jelly Bean
 API等级18：Android 4.3 Jelly Bean
 API等级19：Android 4.4 KitKat
 API等级20：Android 4.4W
 API等级21：Android 5.0 Lollipop
 API等级22：Android 5.1 Lollipop
 API等级23：Android 6.0 Marshmallow
 API等级24：Android 7.0 Nougat
 */
public class Sdklists {
    public static HashMap getList() {
        HashMap params =  new HashMap();
        params.put("7.0.0", new String[] {"24", "Nougat"});
        params.put("6.0.0", new String[] {"23", "Marshmallow"});
        params.put("5.1.0", new String[] {"22", "Lollipop"});
        params.put("5.0.0", new String[] {"21", "Lollipop"});
        params.put("4.4.0", new String[] {"19", "KitKat"});
        params.put("4.0.0", new String[] {"14", "Jelly Bean"});
        params.put("3.0.0", new String[] {"11", "Honeycomb"});
        params.put("2.3.0", new String[] {"9", "Gingerbread"});
        params.put("2.2.0", new String[] {"8", "Froyo"});

        return params;
    }
}
