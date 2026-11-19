# People Skills Pakistan — Website Structure & Handover

**A complete, static, 62-page website.** Upload the whole `peopleskills-site/` folder to your web host and it works as-is — no build step, no database, no framework. Pages are plain HTML sharing one CSS and one JS file.

---

## How to deploy (3 steps)

1. **Upload the folder.** Put everything inside `peopleskills-site/` at your web root (or a subfolder). Every page is **fully self-contained** — all styling and scripts are baked into each `.html` file, so pages render correctly on their own and on upload. Keep the `images/` folder next to the HTML files for photos. (The `assets/` folder holds the editable CSS/JS source if you ever want to switch back to linked files — it is optional for deployment.)
2. **Drop in the photos.** Add the licensed images named in `image-shot-list.md` into the `images/` folder. Until then, every image slot shows a finished brass-and-green panel — nothing looks broken.
3. **Wire two things to a backend:** the **contact/proposal form** (to email or CRM, e.g. Formspree) and the **certificate verification** lookup (see below). Both work as a demo out of the box.

### About the page filenames / URLs
- Every page is named by its **slug** (e.g. `leadership-strategy.html`) — never a folder of `index.html` files, as you asked.
- Internal links are **relative** (`leadership-strategy.html`), so the folder is clickable locally and on any host immediately.
- Each page's `<link rel="canonical">` already points to the **live pretty URL** `https://peopleskills.pk/slug/`. If your server serves clean URLs (e.g. `/leadership-strategy/`), the SEO signals are already correct. If you prefer to keep the `.html` extension live, just update the canonical tags to match — say the word and I'll switch them.

### SEO built into every page
Unique `<title>` + meta description, canonical, Open Graph + Twitter cards, and structured data (JSON-LD): `Organization` + `WebSite` on the homepage, `Course` schema on every training page, `Service` schema on consulting/industry/productivity pages. Plus `sitemap.xml` and `robots.txt`.

### Theme changes by section (so the reader isn't bored)
The luxury identity (ivory paper, brass hairlines, jali lattice, Fraunces + Hanken type) stays constant, but the dark anchour colour shifts per main navigation area:

| Section | Theme colour |
|---|---|
| Home & Corporate Training | Forest green |
| Consulting & Services | Deep teal |
| Industry Solutions | Midnight blue |
| Productivity Improvement | Burgundy |
| Company | Espresso |

---

## Page inventory by navigation

### Home
| File | Page | Live URL |
|---|---|---|
| `index.html` | Homepage | `https://peopleskills.pk/index/` |

### 1 — Corporate Training  ·  *forest green*
| File | Page | Live URL |
|---|---|---|
| `corporate-training-hub.html` | Corporate Training Hub (landing) | `https://peopleskills.pk/corporate-training-hub/` |
| `leadership-strategy.html` | Leadership & Strategy (hub) | `https://peopleskills.pk/leadership-strategy/` |
| `soft-skills-and-communication-hub.html` | Soft Skills & Communication (hub) | `https://peopleskills.pk/soft-skills-and-communication-hub/` |
| `sales-skills-hub.html` | Sales, Service & Marketing (hub) | `https://peopleskills.pk/sales-skills-hub/` |

**Leadership & Strategy**
| File | Page | Live URL |
|---|---|---|
| `leaders-vs-managers.html` | Leadership vs. Management | `https://peopleskills.pk/leaders-vs-managers/` |
| `emotional-intelligence.html` | Emotional Intelligence (EQ) | `https://peopleskills.pk/emotional-intelligence/` |
| `strategic-thinking-vision.html` | Strategic Thinking & Vision | `https://peopleskills.pk/strategic-thinking-vision/` |
| `change-management.html` | Change Management | `https://peopleskills.pk/change-management/` |
| `conflict-resolution.html` | Conflict Resolution | `https://peopleskills.pk/conflict-resolution/` |
| `high-performance-teams.html` | High-Performance Teams | `https://peopleskills.pk/high-performance-teams/` |
| `decision-making.html` | Decision Making Under Pressure | `https://peopleskills.pk/decision-making/` |
| `women-in-leadership.html` | Women in Leadership | `https://peopleskills.pk/women-in-leadership/` |

**Soft Skills & Communication**
| File | Page | Live URL |
|---|---|---|
| `effective-business-communication.html` | Effective Business Communication | `https://peopleskills.pk/effective-business-communication/` |
| `presentation-skills.html` | Presentation Skills & Public Speaking | `https://peopleskills.pk/presentation-skills/` |
| `negotiation-skills.html` | Negotiation Skills | `https://peopleskills.pk/negotiation-skills/` |
| `interpersonal-skills.html` | Interpersonal Skills | `https://peopleskills.pk/interpersonal-skills/` |
| `time-management.html` | Time Management & Productivity | `https://peopleskills.pk/time-management/` |
| `critical-thinking.html` | Critical Thinking & Problem Solving | `https://peopleskills.pk/critical-thinking/` |

**Sales, Service & Marketing**
| File | Page | Live URL |
|---|---|---|
| `consultative-selling-b2b.html` | Consultative Selling (B2B) | `https://peopleskills.pk/consultative-selling-b2b/` |
| `key-account-management.html` | Key Account Management | `https://peopleskills.pk/key-account-management/` |
| `customer-service-excellence.html` | Customer Service Excellence | `https://peopleskills.pk/customer-service-excellence/` |
| `handling-difficult-customers.html` | Handling Difficult Customers | `https://peopleskills.pk/handling-difficult-customers/` |
| `digital-marketing.html` | Digital Marketing for Non-Marketers | `https://peopleskills.pk/digital-marketing/` |

**Technical & Operations**
| File | Page | Live URL |
|---|---|---|
| `checklist-leadership.html` | Checklist Leadership | `https://peopleskills.pk/checklist-leadership/` |
| `fleet-safety.html` | Fleet Safety | `https://peopleskills.pk/fleet-safety/` |
| `behavior-based-safety.html` | Behavior-Based Safety (BBS) | `https://peopleskills.pk/behavior-based-safety/` |
| `finance-for-non-finance.html` | Finance for Non-Finance Managers | `https://peopleskills.pk/finance-for-non-finance/` |
| `supply-chain-logistics.html` | Supply Chain & Logistics | `https://peopleskills.pk/supply-chain-logistics/` |
| `data-science.html` | Data Science for Managers | `https://peopleskills.pk/data-science/` |
| `project-management.html` | Project Management (for Non-PMs) | `https://peopleskills.pk/project-management/` |

### 2 — Consulting & Services  ·  *deep teal*
| File | Page | Live URL |
|---|---|---|
| `hr-and-od-consulting.html` | HR & OD Consulting | `https://peopleskills.pk/hr-and-od-consulting/` |
| `hr-policy-and-audit.html` | HR Policy & Audit | `https://peopleskills.pk/hr-policy-and-audit/` |
| `organization-restructuring.html` | Organization Restructuring | `https://peopleskills.pk/organization-restructuring/` |
| `engagement.html` | Employee Engagement | `https://peopleskills.pk/engagement/` |

**Talent Solutions**
| File | Page | Live URL |
|---|---|---|
| `talent-solution-hub.html` | Talent Solutions (hub) | `https://peopleskills.pk/talent-solution-hub/` |
| `executive-search.html` | Executive Search | `https://peopleskills.pk/executive-search/` |
| `assessment-centers.html` | Assessment Centers | `https://peopleskills.pk/assessment-centers/` |
| `psychometric-testing.html` | Psychometric Testing | `https://peopleskills.pk/psychometric-testing/` |
| `employer-branding.html` | Employer Branding | `https://peopleskills.pk/employer-branding/` |

**Strategic Services**
| File | Page | Live URL |
|---|---|---|
| `strategic-services-hub.html` | Strategic Services (hub) | `https://peopleskills.pk/strategic-services-hub/` |
| `team-building.html` | Team Building | `https://peopleskills.pk/team-building/` |
| `event-management.html` | Event Management (MICE) | `https://peopleskills.pk/event-management/` |
| `elearning.html` | eLearning Development | `https://peopleskills.pk/elearning/` |

### 3 — Industry Solutions  ·  *midnight blue*
| File | Page | Live URL |
|---|---|---|
| `industries-solutions-psp.html` | Industry Solutions (hub) | `https://peopleskills.pk/industries-solutions-psp/` |
| `manufacturing-textile.html` | Manufacturing & Textile  ← new page (fixes the dead link) | `https://peopleskills.pk/manufacturing-textile/` |
| `banking.html` | Banking & Fintech | `https://peopleskills.pk/banking/` |
| `public-sector.html` | Public Sector & Government  ← corrected slug | `https://peopleskills.pk/public-sector/` |
| `retail.html` | Retail & Hospitality | `https://peopleskills.pk/retail/` |
| `health.html` | Healthcare | `https://peopleskills.pk/health/` |
| `education.html` | Education | `https://peopleskills.pk/education/` |
| `hotel.html` | Hotels & Restaurants | `https://peopleskills.pk/hotel/` |

### 4 — Productivity Improvement  ·  *burgundy*
| File | Page | Live URL |
|---|---|---|
| `eq-intelligence.html` | EQ Intelligence | `https://peopleskills.pk/eq-intelligence/` |
| `customer-service.html` | Customer Service | `https://peopleskills.pk/customer-service/` |
| `sales-excellence.html` | Sales Excellence | `https://peopleskills.pk/sales-excellence/` |

### 5 — Company  ·  *espresso*
| File | Page | Live URL |
|---|---|---|
| `about-psp.html` | About PSP | `https://peopleskills.pk/about-psp/` |
| `our-faculty.html` | Our Faculty | `https://peopleskills.pk/our-faculty/` |
| `client-success.html` | Client Success (case studies, gallery, video, testimonials) | `https://peopleskills.pk/client-success/` |
| `certificate.html` | Verify a Certificate | `https://peopleskills.pk/certificate/` |
| `resource-library.html` | Resource Library | `https://peopleskills.pk/resource-library/` |
| `careers.html` | Careers | `https://peopleskills.pk/careers/` |
| `contact.html` | Contact | `https://peopleskills.pk/contact/` |
| `privacy-policy.html` | Privacy Policy | `https://peopleskills.pk/privacy-policy/` |

### 6 — Blog  ·  *forest green*
| File | Page | Live URL |
|---|---|---|
| `blog.html` | Blog (index / landing) | `https://peopleskills.pk/blog/` |
| `blog-future-soft-skills-pakistan.html` | The Next 10 Years: The Soft Skills Pakistan Will Need | `https://peopleskills.pk/blog-future-soft-skills-pakistan/` |
| `blog-graduate-soft-skills-gap.html` | Do Pakistan's Graduates Have the Soft Skills Employers Want? | `https://peopleskills.pk/blog-graduate-soft-skills-gap/` |
| `blog-why-careers-stall-soft-skills.html` | Why Talented People Get Stuck in Their Careers | `https://peopleskills.pk/blog-why-careers-stall-soft-skills/` |
| `blog-soft-skills-harder-than-technical.html` | Why Soft Skills Are Harder Than Technical Skills | `https://peopleskills.pk/blog-soft-skills-harder-than-technical/` |
| `insight-why-training-fails.html` | Why Most Corporate Training Fails to Stick | `https://peopleskills.pk/insight-why-training-fails/` |
| `insight-leadership-vs-management.html` | Leadership vs. Management: The Real Difference | `https://peopleskills.pk/insight-leadership-vs-management/` |
| `insight-choosing-a-training-provider-pakistan.html` | How to Choose a Training Provider in Pakistan | `https://peopleskills.pk/insight-choosing-a-training-provider-pakistan/` |
| `insight-high-performance-teams.html` | Building a High-Performance Team | `https://peopleskills.pk/insight-high-performance-teams/` |

*Every blog post ends with a call-to-action that routes the reader to the Contact page &mdash; the blog is built as a lead-generation funnel. To add a new post, copy an existing `blog-*.html` file, replace the content, and add a card to `blog.html`. (If you wire up a CMS later, these become the content the editor manages.)*

### Structural files (not in navigation)
| File | Purpose |
|---|---|
| `assets/psp.css` | Shared design system + all section themes |
| `assets/psp.js` | Single-source navigation, mobile drawer, certificate tool, scroll reveals |
| `sitemap.xml` | All 62 URLs for search engines |
| `robots.txt` | Crawl directives + sitemap pointer |
| `404.html` | Custom not-found page |
| `images/` | Drop licensed photos here (see `image-shot-list.md`) |

---

## Two things to connect to a backend

**1. Contact / proposal form** (`contact.html`, plus the homepage form)
Currently the submit button links to WhatsApp as a safe default. To capture submissions, point the form fields at a service like **Formspree**, **Web3Forms**, or your CRM. (The fields are standard inputs — no framework needed.)

**2. Certificate verification** (`certificate.html` + homepage widget)
The lookup runs against a small **demo dataset** inside `assets/psp.js` (sample IDs: `PSP-2026-04821`, `PSP-2026-03110`, `PSP-2025-09984`). Replace that `SAMPLE` object with a live lookup against your real records — a published **Google Sheet**, **Airtable**, or a simple API endpoint. The UI needs no changes.

---

## A note on the single-source navigation
The old live site had a recurring bug: the desktop menu and the mobile menu were different, and some links were dead or duplicated. Here, **both menus are generated from one list** in `assets/psp.js`. Edit a link once and it updates everywhere — desktop mega-menu and mobile drawer stay identical by design. To add or rename a page, edit the `NAV` array at the top of that file.

---

## Social links to confirm
Footer social URLs are best-guess handles — please confirm/replace LinkedIn, Facebook and YouTube links in `assets/psp.js` (FOOTER) or the footer markup.
