<html>
<head>
    <title><?= $this-> data['title']?></title>
    <meta name="description" content="<?= $this->data['meta_description'] ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL_WITHOUT_INDEX_PHP.'css/style.css'; ?>">
</head>
<body>
<header>
    <div class="sliding-part">
        Panaudok koda masinos24 gauk 15% nuolaida.
    </div>
    <nav>
        <ul>
            <li class="logo">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQMAAADCCAMAAAB6zFdcAAABblBMVEUZW43////ueCEZW4v///0bWo0AW4uXaWX2ehwRWo1BYXr6eBrzdyH///v8/Pz8//8IV41egKMAUof///jwcRMAVIZVeqf3///0roAAUIeKmr/b3OjseCH1nWUZXYv7//wAUYv4w5/K2eby9PMAWZLyaAD4zrKcscXwi0UAUoGru9JCbZZPX3judibzdx/edDO7cEaNZ2DylVX55tXn8PZsjqqvvssASH65x9mAaGeVaV51Z2VuYXWYZWdpY29DXYHFcEL1fg/hdCaGZGibalnMdj3keyImX4JiYW8JV5bWeDeycUcbXoWualPfeCylbVXObEKNbV2sbFtJXYRWY3NzY230o2v12cH48OXyy7f0sH+fi4j4yKf48d3pjEfz1rb84s31nWrmt4jEt67ak2b1hz3BZB/1YgDxzKXmtpv84tPNztKDjptrja9egK9GcZCYpLx4m61CapmzutRqjrSux9RrjJ/U5ObO0+eWq7mNhM/OAAAgAElEQVR4nO19CXfbxpYmQKDYRMgCigARCiZdoEDINEWTdiRQppM3sePnJbaZpfvZlsbjRUmPe/w6w2iZaGj/+7mFpQBwE0XDp3XO8J4sEoWl6qu731tFQfj/nCRJ+q8ewn85rTFYY8BojcEXw2ClhyK07K3+qNEq75j7tIxJUhSX5C9IhCguTEtRlCUudgmMWsoKhMwxIJKEbtz5lxXo2+8USfnbt/9tiUu/p5KLMht49nyQv3uvVCwWLk7FZ3lBufXDUpfev2NKmYGQLQYIofyNnwvdbu7CVCoV/u5K6Gnl3HtLpVK3VHhgujSjUWeMgeDShzDGi0MAUyvekKS7j0pL4tf7XqEZKYSMMZDcF8VHK0HQ7eUeC8MfS8tiUHz4JKtRZ4sBpflfit3VMCg9JST/TbHeW+76ej0rUcgYAzLM3+qtJgrdwj0XPXlW7C6JQa7wOKtRZ20XpKcrYlAqfEsE8rSXW/Lu3v2hktWYM8VAQnfvr4QAUPF7ItELyNG9/OX0kaj7fFlWnqZ/CMpXvaUxKPx0aTG4U1hp/vVc6WcJke8Ky2PwDclq1Flj8MuKGJRKv+YReVBcGoPe88vqIykPV8MA5vSTQpV7S19e6j5+ckkxQD+vqhJ7f1cEenP5y59m5SVmbhu/WhUC4G1FudutL3dxN1e8RS5p3Oh+X1wVg+5dRflxeUEqPshMFLLG4F+XV+wT9BRijW+WvbueK37nDrMyDBn7ys9WVonPCHV/Wta56ObqN5RLKgv5p6u6SMVvAYOHy2Nwn15SDJTH90tLarUJKhW/dwV6f/kb7mUVLAjZYoDI85UAYBjkbhDlxvLXF3+5nBggRO6snDy4SaX8i8LSIWfxTmaecrYYSE9+Ka6QSWRU+JXQ/IPisoFzrvj8kmJA3XsrJg9yhX9zh+6tZZMH9Vz38eWUBUGhN1c0C6XCHULJzaXZoHTTzWzUGduFf6yGAKiDwg1Ch0vnkHKFe9l5iVligFD++8JqlrFbqt9F+eeFpbPyhQeZBc5Cthgo36waLZSeDunynnKuXniRoTrIVCeSZ6tiULzlCk+eLZ9I6/0js4KrkK0+yD9dMWCqFx8o5MnSnnIOPOXMBi1kioEyrK/oHeSKLxR0AU+59zDTpEeG+kB5PkMU6oz8nxbhU7pByN3lmYjl3S6nLCgvikmzEP7c9b3n+mIM7lOUf7G0KHSL3+Qvpz6QFJ5TDmxcrwL/r/TYDz3wH32aPanSQ6K4D5bHIPf8kmIgKPcKbLHruQqjXP399es7Ab19/75bCj71adKLKDx7Qhu3lnYu6vV/uFm6dtlhoAg36zmYae76y43X+7tvDg4Mw5Bt2zAwNg4O3hxe29y4+r63VSlNtmiUin934e7lHaybKLtGHCFTDL6qVwqVq9d2sV2tahr8K4oGtu0qttlv8HtVs5u7H17W0zCAhPR+VITlC5Wl0q08ylAUssTgb1vvX+3aMNNqc/e///5y5/qjR7lerr6r7e9cfflqE3jjABtaVTT2X93fqtTjKZXqQ0H5cekSU6n4LbmcGEjm/7h2AAtuv3l99RFTCb1Ax1VeV/crhV6PfVLfefVh16hq6psPbyuRAgWOuJkXlDuFZdNw3eILN0sIMsNAkjqeJmrGwat6LpVbrrzUDt5Hq94rVnJvNw9AMPC7HVAdpQCDe0RQflo+Kw/exGXEAEmkrMoYv+7CxFLrWa8b2kvuOIAeqFQKL/dBZYiHV5nhhKCx9G8Kyj9cPgt3X8oyYsoOA4GcYFk8rEwp9/rWbvXDVurTUiV39Zpha8b+TgUcB8bbAu0ui0G38DBbCLLDwNyWZXG31Jt0B+tb/9QOK+mP6uA27byzNdu49h5sROHuE+WrQm5JfdAtPMswl8goM1nQHSyK8svKlLdX+c02fp6eSaVy/RqoR9AfW/cfC/nvivVlZaF3h2TqHmRnF6gHGGi7gTuYovpB9WX6Ez/zCpZiZx9XtcOd/8hTN8gp15dhBfAmMlWJWWEgKR3VBj6wr73aiOnVq1cvr169uqu927maoN92rjN6D870729w1fj3J2bjHgMGXKcl2ny7d7NrVQ4GnxEfkL4MGKh2VZRjEpnDBD6DWgVXUeQkw28+2VWjCr60OD7u/8/39cIPlXPnz+gpyTJwFrLTB9YnzDAwVDWBgawGpKl2+nNGtqiBNZVFVcXwX+3gYP/1xs57MJ3nxI+9THPKjLLCwBzI/hKLKT7gKx//KPLLUr+GPxzsXoPAqrJVqXTrufq0YHRZxzpxM3WVM5MFy5uY5moEXgN427uvN94Xir3ZGOS+Uy4nBgpqTi32KuSLDtgXu7m/uVOYlWgu1W9k7B5khQEp22oWGASEWfQpGrsb9Upuwn3slu4/zq4bK6CsMDjBSc3/ubT/6vdr+7tvtIONyoTrBJ5yHl1OnWhuYzUTDICZZNmPJLYq9bev37zupqLQeqnwkyLRbKUhKz5wRM1nBCbNK5F/H7Og8K+masa1txXwOd/v76c2ddRLxTuAQZZV56wwkNx///3VxocDW8MrYwAeQ5U5TqqoGaAVNbz5aKtYqbw6fFSJk7DABz9mrRIzk4X/2Kps/a/Kb4fVVSUCJODg8PXGxrVdQ2PRl22Lb37fub5z/cO7bpyTr5fqdzOOnLPBACFy9M/9w8PNt1uVzaq2gn1g5hC/e7sFC79V2blW1XwLydJSGGLL35M+9M2MAyYhKwwan9iIq8a7n7d+Z9x8YQxAAWxsVV5+ONw93Hy/tWGoOPiDBl60fZDAoHAr21wio2ww0AdsImDW37zfele9MAYQOBxc3do5tKtgYat4swIg8D9WsZGIqAsPMheFbPSBZNbYaCFCqB7mruMLC4Os2q+2dg4gkGRxl2pfA5Hif8Ragg9KhRfu5dSJ9NQLxmurxitghAtjUP3PXHc3crJAO27+cMD/Zmj/+UPMB72vyOXEQCqHA1aN6uHWhn1BCAC6DdAjKodOe1PfjO2L9iGhD35+fDn1gWD2cTB+FVcP6teNi2IgG9crhwkMRO3lTvxH+2WMQeHXbMtsPmWiE/VtzMdvvH9/YQzEg3r9wIgxkO3NRzEg9k7kI5V8T/lSygIyHYyjFVwNg17X1pIYXMthLgwHPIsAGHyTce6AUSYYUI/zgXZQuHphfaAd5LoHcmwOZfz6EeZuxmalxDHo/UiyjRUYZYGB0rFDCFStem1r07cLPKvGPgZHh+UXZKxG0WWYX1SZXcQaBn1gxxjg6ssdg90P4ZP25jqPF7ql7l0l25wyoywwIKNoDQ374H13twqeroxlFTOCWWoys/wsktCmCOwifFrd2NqIPQLRflN451tKzdYOfqv06hyDp6yck8G0U5QFBnpLDFfXrm5Ucm+vBxTWFH57CRQUG1692ozo9bWA/vg4+OPd/v5mt3tocw1gbBQ+wIe7u/v713a4JORKudK9LHt0I8oCg8b/fgOLKYOfa/xeKfVKrFrSC6lU6VUqBfinMF2AYnTXdH+s1Cv1boX5iRpm/4jvKrluj/UvwM29ZO2p8Iv7BY5zykQffFvfPDCwcQCLNlVznU+sT+0pkcIu5/rW9X0MImMbB5uVOV27XfCUszcLWWAguT/9UOldv/q2XlmuUBRj0LvlUuUnP1vG2tmuvj483P/ndeD+2Rj0Snez7cIJJ/D5GCjKTZbk8CuppYWtmFMYsB78/L0gY9gFSIKKbG5eI2PvvvAFIPhsDCREFen+atsWcqXiC0Wi93vL3t77NbNzH1Jz+Fw+QJT8rTvddrkcBr27VLmxbPMF61POPmASPh8DRKh7p7fiNqbKfYEdqHSBsy++hFn4fAwQ24Cy2q7GXOmpy7ovluaD4t8yj5cYfT4GAqzkivsWes9c5N4qLCtIpdyN7A5NTNDnY4DQ3ZvL78JJUL1e/MZ9ojytLHFz14fgV+lLmIUsMBDclfdyfa8gWl9iM1u3C4iVcne+hIeUUR5JeVAo9JiBvxDVu93HT6Tnhd75lzIUCqV/zX+Zs1+zySfSFw+7heIFqfDDzSGld5a6tFC8//A5+BKfP9ZZw88ih0IoUR5/dWG68RVC0t0lLx7miYsupz7wiSlGZRUSglNkYQznXSkp6IvMn9H6fOU1BozWGKwxYLTGYI0BozUGawwYrTFYY8BojcEaA0ZrDNYYMFpjsMaA0RqDNQaM1hisMWA0BwOE/Eo/+/ccjNCFvzTs3OSoFH5t2cLTLthTKB8bgpsWDlRioySz89JzMeAjlRbPEQnnwIToRFXg/AQxpTAnKcBgAZ8Gq6QoSPF/ORcDCYYy66I5GFCJKoSYpqkQdxEKcLPSIIs2HLI2cypFRNmPizGAtykK0QkhCrt8EsGAfP4klmWyA7OkvKnrC1v64Z0wGao3luQDuEwijYbQKY9G/X65gxoNMvdr8iSkd0ajUcect7MCKbquwxADYj9YpslwQQKa1VgjCXnTlDpH8NDRn1+fEksnMx9NdLPTb+05HqOx0/oL6Qu6NyVkHm3XPKevz5rIJAaSRFyL9luOFzULek6rjODeWRBK+c5AY/sP9mZvxwcwO8cDJ0WD7eN+h+hSSp59uAAARW8fHTte1LKqec52n5rKBFykIY32aipr6vU7e2VDFr2zjkXmSaXU7nuiLBrimTljHlN84DY6LS+9G0fWaidSY8ajkXsabvWWz3RhFgzmsTexD1pmXbzNcatj5lH6DkQFS+oD+FHzs7/fU67C7MyUDnGHLS+5Wd5/ATaarfbs/V6SYJaDPWJY7s84PGESA2IeN1lbcQIFVbVFXCvrMzCQPhp+P7KK7bI5AwO9hQ0jve0zOBVBxs1Bp5E6/A4Ue7s8xjLGcvLlrN/XOzHj3SuKNQJc1cnNpFVNFp05G2AlfWywVmDNwB/16RP3khjAT+aRE708vXhYO9GnGE3/FOzpZFy53ZiGyOyLs0lmzczVPoM1GBFCBCnDbR8fcXJPGCDcj1YAJHtPnrVpDO6T8cch6NzJOUpUP5Z9yAxRrlnTm2TTGOj9uccYqGp/Uv0rlCsNUR5PYyCYzpyH+dwrA6wcLuQSOpDV2W/HeKxHlvpJa4oF+FNVvGdN2zmJdMJZAZMNGtN7QBIYSJI5ijciTEGAxyT5fLDHeive3qw1pyEgneYcDDisJtdiSD8T520UxnbzlK+TN8Un8fNk7a8pbkUIxhltNVLL5+gDs9OMV8I/ziA+z4NtNOik75aoZ0QyI2tGecKtY8eHnbObQ/aCb5JgLkN7O5Zx9lItqfPsZmj3kPQnO0IlvCgYHdvmEPwEIIz11DIzVUo6Kt9utW3OMKBJDNA4AamPgYFlm+8raHbSs7ROYsGUNXylMYHBkIzip2GDKTfDwGkV2QqkQUKNUWJ7rCYbWGOnxfi7p5nycNohBu0/xUC2RdXAouqNx2MPrpa5KTlNSSwilOpOxDkqTGEKgRQGZgvzURhYBUPe2nbYC8InODTpXkhISppQ1RhMGA6EzGOOQbSooFyNpN4HRmCXCrTtRCyogdFXm97Ya2rhLhhVbh6Z4UOp0AzGA7ZwcHJ0KpjSad+LVYTcSg0Dgbs7YqYm+uNiP1E5avIHic3WKfPpGu3hiRcOGUQppXL1YyOJgVybDAtI+/9EU8dOK6TtwTih+GX8l78wUntkaCH329hrlSkyJaHcqgUfeWVTiuaknwR3ey1kWYSdGia51Ilg1Yw/JjAgtGbYRrC7yHNn+pwhBiA35l68prWOHn6sNOg2MLIsN/tW6tnucJxSTrLXITT95EZkFmR85bZuMYL/DkdOvGy45T+VwqX+MEEADKfTJswzFEzdLLc+OmcniW8hQgIZ/eF5zqdhwgKAIov20qm1Ceuln4QKUbPl0ew9spwPUCdkMhiId9oOlpyFJq5VBm+3ddpI3wfPTkm2rJUn9tnQ6LwgWcYjRQiCJgggGuaZEW7b0bAvQRBLeYG5ZOYHuaEPDZcTFl7oaYvuwi3ESnqO9PaAa9DapD6IrL2GHXNh3ChJVivSVrJaTsyXUgpSYemTt+ljOckHwMjH1jB5CRNdI2QDu9yIVoBFZMOmHY+LfQgyGy4jFvsWqIdobP5E0y15EnWnzs0jx1yVeWYKA2uPW7Ym2MWZYU3EB8ishbsqwY9oJ/2AKPRN35cfBSwmG3bwelkcTJhm5Wst1EW42UlFKo0BTmEAngaOMGDmMnGxHzunwwo0nSrQTyIMcC1eLVgFclTlFmNPR8HdczAAXypaVBuX8+S8DBsitYCfZbsW2Y3ahNIlf0XhEvB3ShmZrVhZttnbrTOOQc1c/OaZpH8S+QNjE00gwnZwKHe4GZigBRiY/YgbDW9GWDFJZBQpDy8ygKGd44TaVyLOEp0UPEjfi3CTA4uq8yhFrs2Izc6lxoCL5F78KiQ1+kbAivC6Tw2KJIWY09/vFWGgc7kxzqxzzuaDMF9yglmA93LMt/mW01q3vc33LO+lJ6Y73Kxu+3FTjAH20IWzvLCyXuhcyOIoYUOQFAk4YNt2qWke9Ued9iQnRBg0ahEfyCfnrYSESJ+z+fEJV8nHVuqqhsP/0koyuKScxp7IscnSt5YTyoItyyfmxbb3Q7hlHdtqaBybidwbarSi18han7jW/x3bBm7utedgIMQBY/m8zSISajthokNTO32ukge3UytojvkG+D5/JEuW6jxAlNUjkw2ocRYZMBmDI2KGieUldrEx8Ya4MPIExYEVY0CkZvSxMSDEPKmy/ZNYPDPTnBZioEC4FI632Tlv45RklsGNZY/X8MfbUY5AnhJlDivuuKFpAadLb7Q0HEUxvkoElmF2wc9EgH3WnL6pgwcoSIuz68FYKEyB8zAsoBsrs/ZeFPOBYVLMMgCvabYqNo8mnhFiUI68TdkTzj15hrFuoGpw3ypzsVBPk3cqpzwMbLYbgZto6TplbmIQGgIQxzoNXp86M0GrHXfMhisNZ7o0E+NXTAeH7gZop+ioVQQGvRz4o6qqya02Mvd8hmWR4MhE6Wf495A+TxzUzgWflCPpkz0LHJ4oIkmwvOCbjih0rm5zgiAMR5u7wQQJhPlVKBmysj/IPgxt/Xz16LrtgREpPrVajjxowMB0Qk/WNjyUf6LXoimqZWkWBjzNABK12ECD48HkOWT/Tw2hzZ1RuRUrRYT0YzFOHwRHIWBgHwhDIwxk+yRcEKlxLCaPlgpsjsMyuWhRIQveQsFCsROlYIKYDSBUJBLSwXwHj8TalQaVkBc5Zs3TWRiAxeYYtMyFfACRWMhj4FF6pxAVRHYtdP7DywRrL8YgebRqNE0VnIOI5YCDnWQUGt4DzsfQnF+XYqmsTg1CbfZ4VZYNR1IivEAkPCPkT+wQhZJOlJXRvInUa6CpiBJn/o7PMY1SexAulGG3YJ0a29Gs8JiLkSRQfV4yMcIAOzQWO6VTmzpGRZWx4ZTb01lSPhS973HoVHkcO2mS1G7hMPsD0QphAszhdyw0gw8IjcwCBEznmAUANNQ1BpgQCTWO5VAcNdC+4TqwamFtEQRgVpzkF/Mi0pnCjJ06jLXj9nCmhkISabdUw44UrDzuKJEPKDEfJPJk8VkDYknrhGOw92SWbYQ7wiAQq0eLdSLLfQa87aeOWP3C5mPuR2kWiZJE0nlqbjA7eTvtWgsKbTV92ziRNsZX2rM0I0J5QC08iAVWRfY6CbOPrIEoh55s83QIgajV4mFuqzEDAySVtTC0kL0hXVhodo+iA2Bk+YjNQopcCxj7cYNbM2CXeRCwVJ3Xn/TWBMXsbKuiYcgTIKjl/KxxWGWPX8kEK5ntTKRzsdHy7S+AEj22P8tHYsWQ0L5A7Dlf/hjFATn+aPn6FHl8boMYA30U68FJDNRaP29OixxVLHrMyogpDFSjZk1eySKyE3aod+SB4EGqbKC0nUi7QMzK0hGKOeZxWodMYyCRxqfoOCIZnM25RhkCL9JphvkCGY9M3/UlsSDXuH8lmSfRhzgsjEbWWfXK7fasU45AU7Gaa8uHQQ5PEWIWFXRarMX8xEqe7oGVjTDFYiJaBBeZNvo8lWyPLDA7YEK88BwrWRvOxmDApXBbT2WD0hhIQmOP1yvGVAjsE09EimqHayU9MheaXPOdI8z51uu4M1kt+IwQ/euWZxhhUh8wMLaTzMs6KQiK4zGmXU7aJNEJAjPyQsRV2dEJy7konej8Z7mmTPSs+BgoVo2L1pXpsmLiahfYIFgfTezr/pooOs8giOKIjzZ2G+Tj241G4zRO6EBgs0Da2Co3rL/GcbochIEmyyDD9tdebEjBSynrSmJWlKWlqqE+qHbaFmt6uF3m5WzntjnDP6Ao1uF/Kos21DI2CMfW7Jx2AurHkh9n90kUyGi4n4fIRofQMMg8QSA7s9SRHBW16JkdLRz2eD8PC6TAA/TiEgXY2A5AmkivUXLEtSVuRt0PY14z884G/XbybBmGAaGUPxK4eX4GBd7Pq06q2uQUY+BEZieux2rq1+wUE3LUjN3hwQwtlyCWUqBDj3uXTUkKBwX6jTZOVF6YBC95DylpV9K33hGThBn7ycPgB8oEBkg54n9s0gXf8ABMFtcfRRxR/GjZi/iAdKLakgzuORs8qA0jkXI6Z/s2ojzHyAYlhWqfCsRsJUp8sn3FohPHhz0BIycuJhZZxKzIMIAIIMZAQnMxkFBcy+D2K2XHcPU0HA4ZcQw8JqsucGg1Dgkc85x2N2Gon/GlC/mAcbzSbgV8HlWgwPhPxBNw43mn2oKKmeADyeRngYrNuek8GAfztRYeGItBKYYDOQnR0QwndF6sQYRBVdb6yuIDwyXJGoTFZM3wLF8OgcjtiBM15hs6j/WpsBLlm+ceaqthL6FE0xgwfTDfO3DBxi7GQOZK0doOF0OT90LhJ0cRa2gweuuc5DUL/0NHGDt6GEJTs8XzHKohnxH/nJwJDGjVOE8WWF1jPgbiX2aKEySF98bRxjHmSbB55IQTtj5GaRYOC+LczYAEy7oQBIU3cMhyy5T8xlmpPari8JxFFWstc6b+bjjnjJFR30rLwpB0uFzLThtFTapgiJRGp1ymPn+Df8Q0dVANV1nJn3/tisz1tOwF36WGeJ4aZhtGBhJMS9XC/gm5hmJnmVLT1E2YI6WU9Vyy8xASRbIoywsqhZsgiBCOdZogidcS3bLKUgpqguS4LqhqNkB0ZimTGAx5gwtWRxY80YcdgcfmaLLsnfjFIP0Kf7//3PgVGrcNqh2YfggiOAad6FWUpVW4ujoJzSilillunbVGQ1MhKOyQVqxPkSGFiDACUajFmSn8qZ1a/biARHXWjJgSB1mOIwsM/sZxqsbg+0gS8xP5SvbbbQsi8bzeKA801gGB8QlTSsiLYks8Pvo6QeUjh2OA+6YvuR3uFmoRv7oSq5HzwqAXfS493tMM1mW5PRrqugmkW53YeRflViO4MLaWgHvLdOMWYFadNaMcIHLzj8v9Kyk6iYs4g9GfNF0VDDFo8UYkGdvOydHpaaf/qeafAyprmsHawswrcpQskfsWzXOiSiPuYMEtllMQSFmO6q18riyRccYxUFkuMqhtOOwd8CJD9gatk37/yrYD0h5npQM1jUg/DqpVtVYb15LknJVDEFyWXtFZszUnnRfnZeBzZeJ7vsIcyte4yqchG4bqeRAeyrwQ2mTltXFUOpPHaTYU2lHjkRhZfpCbCAMn4RPGkQtjceTHb6Dqk5kGCJESSTUmyifR2xYn53D1xJzXPA5RI1ck5anSQZhXtv6wYwFSbXDVjbB0w8aMPWtIrmCu+U4mkhDDSIfDxR5l7QJ6S4wrPzHjsWorx0BsMfuIzJoRY6D63ZsJWcbyICjDCHpZnNuZKPrNic3OvK5thTZ5UrkzDwPgs8SLISLHUYjBVCpIJG3XNDHKJg8nHF3aGEcYyM0jphSjcprKwqiE8LGogV8aVqO9JAZi2guTsTMM+9FZj8IC/499j8toHh+AaxJOD+zR1F+jeiO4oLM9TJb7+ygJ+XK0fhqIfNqXlCivffutW2DfzBrPr50kr5bMvcjAA3e1fbgcY445ZybYCbOO7DseFlt9wHxkzsEg348SqgD8XAzctjMPA/sjdVE7Noyg5CbyMJQXeMGsnCqAAeX5Na2c8rkU3vYkykG/i1luzjmcHNZuIIXBFRLOxUDVytO9BQGZx5yFtqfb83iTDWlvMy6cSoTKagsCFmT+FWVmxE/6RJQiQdAVWgxR/ENnaRtaCwuS4jg1LAI+Ag/kgyEj099bELwsCHV5pH+ix4k963ghBiAKf5B5GICKDuxeqj9hCgNE2T4H1kbKoAANo2qsnag56FhsT41Lm8zRgM/Gj6c241BEa35hS2M9/MyVAG9IA7daNqrpd7JCuY395Lq4zRJ9/ip19kAD+R39GJw4VlaAH0XvWDAT25nI4zHDZvqobjCratBQOBcDlv6C0WiyOGhPV5TjZiuKLP2K0/S/TTFgB9VzjoXb/tfLS8TsN1mPqQYCOslM4N2aHY8lTXHUxYioY4i2pnmjqUSBfuwn55utdpAgYx14DRpsXpFtzWbf6wMC5/RpO5EhQ5Q0OoPmLARYBAlv2l7w7V2u+anJylZ44G/PmouBQGEq+unoeHvgODVnsP2p/FjXCR1KQdiaLw/GY2c0Fa4HQySnbL9QqxP2MkkKbTnB71NvNMt7tdp2x0wGjkTXO+XW3qDmeR68uzU6begomeBmu6wUE4KXeUStRdvrpHZ5UPtj0AcPYkZzf7J3H0ghuqkTRTF1vUF40g25ELAopkRNfeYhz/CRqSuU6Er8OMscKmyr19QrkdUwiaVIYdDLHX1wkU2wgxA+NNiuNmCPRIoMfqeILKAZL0rOUiEmgamhWRv5Zu7tm1vpXfj9UJM3rXjO3Rc7Hm8urff6rjFgtMZgjQGjNQZrDBitMVhjwGiNwRoDRmsM1hgwWmOwxoDRGoM1BozWGKwxYLTGYI0BozUGawwYrTFYY8AIMPh/TWCH4X0AAAADSURBVPukLyHhlicAAAAASUVORK5CYII=">
            </li>
            <li>
                <a href="<?php echo $this->url('') ?>">Home Page</a>
            </li>
            <li>
                <a href="<?php echo $this->url('catalog') ?>">All ads</a>
            </li>
            <?php if ($this->isUserLoged()): ?>
                <li>
                    <a href="<?php echo $this->url('catalog/add') ?>">Add New</a>
                </li>
                <li>
                    <a href="<?php echo $this->url('user/logout') ?>">Logout</a>
                </li>
            <?php else: ?>
                <li>
                    <a href="<?php echo $this->url('user/login') ?>">Login</a>
                </li>
                <li>
                    <a href="<?php echo $this->url('user/register') ?>">Sign Up</a>
                </li>
            <?php endif; ?>
            <?php if($this->IsUserAdmin); ?>
            <li>
                <a href="<?php echo $this->url('admin')?>">ADMIN</a>
            </li>
        </ul>
    </nav>
</header>
