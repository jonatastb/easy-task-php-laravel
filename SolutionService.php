class Solution {

    /**
     * @param String $word
     * @return Boolean
     */
    function detectCapitalUse($word) {

        $areAllLettersUppercase = ctype_upper($word);
        if ($areAllLettersUppercase) {
            return true;
        }
        
        $areAllLettersLowercase = ctype_lower($word);
        if ($areAllLettersLowercase) {
            return true;
        }
        
        $firstLetterInWordAreUppercase = ctype_upper($word[0]);
        $isTheWordWithoutTheFirstLetterStillEntirelyLowercase = ctype_lower(substr($word, 1));
        
        if ($firstLetterInWordAreUppercase && $isTheWordWithoutTheFirstLetterStillEntirelyLowercase) {
            return true;
        }

        return false;
    }
}
