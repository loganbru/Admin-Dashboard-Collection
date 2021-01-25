using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace Veltrix.Controllers
{
    public class DashboardController : Controller
    {
        // GET: Dashboard
        public ActionResult Index()
        {
            string strName = Contants.LAYOUT_VERTICAL;
            string strWelcomeText = "Dashboard";

            if (TempData["ModeName"] != null)
                strName = TempData["ModeName"].ToString();

            if (TempData["WelcomeText"] != null)
                strWelcomeText = TempData["WelcomeText"].ToString();

            ViewBag.ModeName = strName;
            ViewBag.WelcomeText = strWelcomeText;
            return View();
        }
    }
}