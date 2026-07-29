# Programming Practicals

Two practicals. Plan on about **4 hours total**.

If you hit 4 hours and aren't finished, stop and write down what you'd do next instead. We'd rather see a smaller finished thing plus your notes than a rushed large one. Nothing here needs to be polished — no styling, no test suite, no edge-case hardening unless you think it matters.

Both practicals use Laravel and MariaDB, running in Docker. Working skeletons are provided — `docker compose up --build` in either folder and you're going.

---

## Practical 1: Equipment Tracker

Our maintenance staff track equipment in a shared spreadsheet. Several people edit it at the same time, and it goes wrong regularly — duplicated rows, someone overwriting someone else's changes, and no record of what changed or when.

We'd like to replace it with something small and web-based.

Build it in `takehome1-app/`. It's a bare Laravel skeleton wired up to MariaDB, with an `Equipment` model and migration stubbed out and nothing else. The homepage currently returns a placeholder `{"status":"ok"}` so you can confirm the containers came up — replace it with whatever you build. Change any of the rest of it you want.

Staff need to be able to add equipment, see what's on the list, and update a record when something changes. These are maintenance staff, not developers — they need screens they can use in a browser, not an API they'd have to call. It can look as plain as you like.

Then add one report — a page, route, or artisan command that answers a question an administrator would actually ask about this data. **Pick the question yourself** and tell us in your README why you picked that one.

**Send us**
- The working application
- A README covering how to run it, what you built, and any assumptions you made along the way

---

## Practical 2: Add Filtering to an Existing App

`takehome2-app/` is a small internal tool we already use to list assets. It works. It isn't beautiful.

Someone has asked to be able to narrow the list down — by when things were added, and by department or category.

Add that. Leave the rest of the app how you found it.

**Send us**
- The updated application
- A short note on what you changed and why

---

## AI Usage

Using AI tools (Claude, Copilot, ChatGPT, etc.) is expected and welcome — we use them daily. What we're interested in is how you work with them, not whether you used one.

If you used an AI tool for any part of this, include one of the following:
- A shared link to the relevant chat, or
- An exported transcript, or
- A short written summary of what you asked for, what came back, and what you changed, corrected, or rejected

There's no minimum or maximum amount of AI use expected. We're mainly interested in your review process — what you caught, what you'd keep as-is, and why.

---

## Submitting

1. Email your work to joshe@provo.edu by **6:00 AM, Monday, August 3, 2026**
2. A git repo link is preferred over a zip if you have one — we like seeing commit history, though it's not required
3. Document your assumptions and any changes you made to the provided structure

We'll walk through what you built in the interview. Be ready to talk through why you made the calls you made — that conversation matters more to us than the code itself.
