        <main class="wallet-main main">
            <div class="header">
                <div class="left">
                    <h1>Wallet</h1>
                </div>

            </div>

            <!-- Insights -->
            <ul class="insights">
                <li>
                    <i class='bx bx-dollar-circle'></i>
                    <span class="info">
                        <h3>
                            ₵ <?= number_format($wallet['balance']) ?>
                        </h3>
                        <p>Wallet Balance</p>
                    </span>
                    <button class="deposit" onclick="showDepositForm()" style="cursor: pointer;">Deposit</button>
                    <button class="withdraw" onclick="showWithdrawForm()" style="cursor: pointer;">Withdraw</button>
                </li>
            </ul>
            <div class="overlay" id="overlay">

                <div class="form-container">
                    <form action="/deposit" class="transaction_form" method="POST" id="depositForm" style="width: 30%;">
                        <i class='bx bxs-x-circle' onclick="hide()"></i>
                        <h2 style="font-size: 3em;">Deposit</h2>

                        <!-- <input type="text" class="nav-input" placeholder="Operator"> -->
                        <input type="text" class="nav-input" placeholder="Amount" name="amount" style="width: 90%;">
                        <input type="submit" class="depositBtn" value="Deposit" style="width: 90%; background-color:black">
                    </form>
                </div>
                <div class="form-container">
                    <form action="/user/withdraw" class="transaction_form" method="POST" id="withdrawForm">
                        <i class='bx bxs-x-circle' onclick="hide()"></i>
                        <h2>Withdraw</h2>

                        <!-- <input type="text" class="nav-input" placeholder="Operator"> -->
                        <input type="text" class="nav-input" placeholder="Amount" name="amount">
                        <input type="submit" class="depositBtn" value="withdraw">
                    </form>
                </div>
            </div>
            <!-- End of Insights -->

            <div class="bottom-data">
                <div class="transactions">
                    <div class="header">
                        <i class='bx bx-receipt'></i>
                        <h3>Transactions</h3>
                        <i class='bx bx-filter'></i>
                        <i class='bx bx-search'></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>

                                    <p>John Doe</p>
                                </td>
                                <td>14-08-2023</td>
                                <td><span class="status completed">Completed</span></td>
                            </tr>
                            <tr>
                                <td>

                                    <p>John Doe</p>
                                </td>
                                <td>14-08-2023</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>

                                    <p>John Doe</p>
                                </td>
                                <td>14-08-2023</td>
                                <td><span class="status process">Processing</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Reminders -->
                <div class="reminders">
                    <div class="header">
                        <i class='bx bx-note'></i>
                        <h3>Performance</h3>
                    </div>
                    <ul class="task-list">
                        <li class="completed">
                            <div class="task-title">
                                <i class='bx bx-check-circle'></i>
                                <p>Start Our Meeting</p>
                            </div>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                        <li class="completed">
                            <div class="task-title">
                                <i class='bx bx-check-circle'></i>
                                <p>Analyse Our Site</p>
                            </div>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                        <li class="not-completed">
                            <div class="task-title">
                                <i class='bx bx-x-circle'></i>
                                <p>Play Footbal</p>
                            </div>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                    </ul>
                </div>

                <!-- End of Reminders-->

            </div>

        </main>

        <script>
            function showDepositForm() {
                document.getElementById("overlay").style.display = "block";
                document.getElementById("depositForm").style.display = "flex";
                document.getElementById("withdrawForm").style.display = "none";
            }

            function showWithdrawForm() {
                document.getElementById("overlay").style.display = "block";
                document.getElementById("depositForm").style.display = "none";
                document.getElementById("withdrawForm").style.display = "flex";
            }

            function hide() {
                document.getElementById("overlay").style.display = "none";
                document.getElementById("depositForm").style.display = "none";
                document.getElementById("withdrawForm").style.display = "none";
            }
        </script>



        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script>

        <script>
            $(document).ready(function() {
                $('.momo-select').select2({
                    templateResult: formatOption
                });

                function formatOption(option) {
                    if (!option.id) {
                        return option.text;
                    }
                    var $option = $(
                        '<span><img src="/public/resource/images/' + $(option.element).data('image') + '" class="img-flag" style="width:20px;" />' + option.text + '</span>'
                    );
                    return $option;
                }
            });
        </script>