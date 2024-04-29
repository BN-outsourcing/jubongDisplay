"use strict"

import { useIsMobile } from "../constant/responsive.js";
import section01 from "./section01/section01.js"
import section02 from "./section02/section02.js";
import section03 from "./section03/section03.js";
import section04 from "./section04/section04.js";

gsap.registerPlugin(ScrollTrigger,ScrollSmoother);

ScrollSmoother.create({
    smooth: 1,
    effects: true,
});

section01();
section02();
section03();
section04();