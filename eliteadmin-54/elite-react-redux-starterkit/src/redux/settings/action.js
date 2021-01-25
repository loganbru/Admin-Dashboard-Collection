import {
    LOGO_BG,
    NAVBAR_BG,
    SIDEBAR_BG,
    THEME,
    DIRECTION,
    SIDEBAR_POSITION,
    HEADER_POSITION,
    LAYOUT,
    SIDEBAR_TYPE
} from '../constants/';

export const setLogoBg = (payload) => {
    return {
        type: LOGO_BG,
        payload
    }
}

export const setNavbarBg = (payload) => {
    return {
        type: NAVBAR_BG,
        payload
    }
}

export const setSidebarBg = (payload) => {
    return {
        type: SIDEBAR_BG,
        payload
    }
}

export const setTheme = (payload) => {
    return {
        type: THEME,
        payload
    }
}

export const setDir = (payload) => {
    return {
        type: DIRECTION,
        payload
    }
}

export const setSidebarPos = (payload) => {
    return {
        type: SIDEBAR_POSITION,
        payload
    }
}

export const setHeaderPos = (payload) => {
    return {
        type: HEADER_POSITION,
        payload
    }
}

export const setLayout = (payload) => {
    return {
        type: LAYOUT,
        payload
    }
}

export const setSidebarType = (payload) => {
    return {
        type: SIDEBAR_TYPE,
        payload
    }
}