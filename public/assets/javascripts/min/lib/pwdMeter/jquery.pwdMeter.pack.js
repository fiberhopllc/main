/**
 @name jQuery pwdMeter 1.0.1
 @author Shouvik Chatterjee (mailme@shouvik.net)
 @date 31 Oct 2010
 @modify 31 Dec 2010
 @license Free for personal and commercial use as long as the author's name retains
 */
eval(function (p, a, c, k, e, d) {
    e = function (c) {
        return(c < a ? '' : e(parseInt(c / a))) + ((c = c % a) > 35 ? String.fromCharCode(c + 29) : c.toString(36))
    };
    if (!''.replace(/^/, String)) {
        while (c--) {
            d[e(c)] = k[c] || e(c)
        }
        k = [function (e) {
            return d[e]
        }];
        e = function () {
            return'\\w+'
        };
        c = 1
    }
    ;
    while (c--) {
        if (k[c]) {
            p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c])
        }
    }
    return p
}('(e(m){m.Y.7=e(8){8=m.X({E:6,J:W,D:\'10 11\',B:\'V\',M:13,t:s},8);y s.15(e(14){$(s).17(e(){q()});e q(){b c=0;b 9=$(8.t).N();f((9.j>0)&&(9.j<=5))c=1;f(9.j>=8.E)c++;f((9.o(/[a-z]/))&&(9.o(/[A-Z]/)))c++;f(9.o(/\\d+/))c++;f(9.o(/.[!,@,#,$,%,^,&,*,?,Q,~,-,(,)]/))c++;f(9.j>12)c++;$(\'#7\').U();$(\'#7\').h(\'F\');T(c){l 1:$(\'#7\').h(\'S\');$(\'#7\').g(\'r u\');k;l 2:$(\'#7\').h(\'16\');$(\'#7\').g(\'u\');k;l 3:$(\'#7\').h(\'1g\');$(\'#7\').g(\'1k\');k;l 4:$(\'#7\').h(\'18\');$(\'#7\').g(\'H\');k;l 5:$(\'#7\').h(\'1c\');$(\'#7\').g(\'r H\');k;1d:$(\'#7\').h(\'F\');$(\'#7\').g(\'r u\')}}f(8.J){$(\'#7\').19(\'&I;<n O="P" K="\'+8.B+\'">\'+8.D+\'</n>&I;<n O="L" K="1a"></n>\')}$(\'#P\').1f(e(){b p=R();$(\'#L\').g(p);$(8.t).N(p);q()});e R(){b w="1j!?$?%^&*()Q-+={[}]:;@~#|\\<,>.?/";b C=8.M;b x=\'\';1h(b i=0;i<C;i++){b v=G.1b(G.1e()*w.j);x+=w.1i(v,v+1)}y x}})}})(m)', 62, 83, '|||||||pwdMeter|options|password||var|passwordStrength||function|if|text|addClass||length|break|case|jQuery|span|match|randomPassword|evaluateMeter|Very|this|passwordBox|Weak|rnd_num|allowed_chars|rnd_pwd|return|||generatePassClass|pwd_length|generatePassText|minLength|neutral|Math|Strong|nbsp|displayGeneratePassword|class|Spn_NewPassword|randomPassLength|val|id|Spn_PasswordGenerator|_|random_password|veryweak|switch|removeClass|GeneratePasswordLink|false|extend|fn||Password|Generator|||index|each|weak|keyup|strong|after|NewPassword|floor|verystrong|default|random|click|medium|for|substring|0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz|Medium'.split('|'), 0, {}))
