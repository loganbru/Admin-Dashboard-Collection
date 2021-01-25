using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace Veltrix.Controllers
{
    public class LayoutsController : Controller
    {
        
        [ActionName("layouts-vertical")]
        public ActionResult layoutsvertical()
        {
            TempData["ModeName"] = Contants.LAYOUT_VERTICAL;
            TempData["WelcomeText"] = "Vertical";
            return RedirectToAction("Index", "Dashboard");
        }

        [ActionName("layouts-compact-sidebar")]
        public ActionResult layoutscompactsidebar()
        {
            TempData["ModeName"] = Contants.LAYOUT_COMPACT_SIDEBAR;
            TempData["WelcomeText"] = "Compact Sidebar";
            return RedirectToAction("Index","Dashboard");
        }

        [ActionName("layouts-horizontal")]
        public ActionResult layoutshorizontal()
        {
            TempData["ModeName"] = Contants.LAYOUT_HORIZONTAL;
            TempData["WelcomeText"] = "Horizontal";
            return RedirectToAction("Index", "Dashboard");
        }

        [ActionName("layouts-icon-sidebar")]
        public ActionResult layoutsiconsidebar()
        {
            TempData["ModeName"] = Contants.LAYOUT_ICON_SIDEBAR;
            TempData["WelcomeText"] = "Icon Sidebar";
            return RedirectToAction("Index", "Dashboard");
        }

        [ActionName("layouts-boxed")]
        public ActionResult layoutsboxed()
        {
            TempData["ModeName"] = Contants.LAYOUTS_BOXED;
            TempData["WelcomeText"] = "Boxed Layout";
            return RedirectToAction("Index", "Dashboard");
        }

        [ActionName("layouts-topbar-light")]
        public ActionResult layoutstopbarlight()
        {
            TempData["ModeName"] = Contants.LAYOUT_HORIZONTAL_TOPBAR_LIGHT;
            TempData["WelcomeText"] = "Light Sidebar";
            return RedirectToAction("Index", "Dashboard");
        }

        [ActionName("layouts-horizontal-boxed")]
        public ActionResult layoutshorizontalboxed()
        {
            TempData["ModeName"] = Contants.LAYOUT_HORIZONTAL_BOXED;
            TempData["WelcomeText"] = "Boxed";
            return RedirectToAction("Index", "Dashboard");
        }
    }
}