{"version":3,"sources":["core_translit.js"],"names":["window","BX","translit","arTransTable","translatorCache","defaultParams","max_len","change_case","replace_space_and_other","replace_space","replace_other","delete_repeat_replace","use_google","replace_dict","replace_way","skip_r_test","r","en","space","str","params","i","toUpperCase","callback","message","CYandexTranslator","run","len","length","str_new","last_chr_new","chr","charAt","test","chr_new","__getChar","replace_separator","toLowerCase","type","isFunction","correctText","mixed","countEnglish","countForeign","regEnglish","regSpecial","IExternalTranslator","this","prototype","res","__checkCache","result","translation","translate","bSkipCache","original","CGoogleTranslator","CBingTranslator","superclass","constructor","apply","arguments","extend","google","browser","IsIE","cb_ie","proxy","cb","setTimeout","loadScript","Math","random","language","load","delegate","cb_name","parseInt","url","util","urlencode","substr","version","SearchResponse","Translation","Results","TranslatedTerm","arStr","split","text","langPair","code","join","__generateTransTable","arFrom","arTo"],"mappings":"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","file":""}