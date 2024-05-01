export const isDesktop = '(min-width:821px)';
export const isMobile = '(max-width:820px)';


export const useIsMobile = () => {
    const user = navigator.userAgent;
    let isCheck = false;

    if ( user.indexOf("iPhone") > -1 || user.indexOf("Android") > -1 ) {
        isCheck = true;
    }
    
    return isCheck;
}